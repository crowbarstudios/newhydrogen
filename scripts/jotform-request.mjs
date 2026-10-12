import { ReplitConnectors } from "@replit/connectors-sdk";

// Private CLI helper: input arrives on stdin, never through URL/command arguments.
try {
  let raw = "";
  for await (const chunk of process.stdin) {
    raw += chunk;
    if (raw.length > 8192) throw new Error("Request too large");
  }
  const { path, method, fields } = JSON.parse(raw);
  const allowed = (method === "POST" && path === "/form/262847331355056/submissions")
    || (["GET", "POST"].includes(method) && /^\/submission\/[0-9]+$/.test(path));
  if (!allowed) throw new Error("Unsupported request");
  const connectors = new ReplitConnectors();
  const response = await connectors.proxy("jotform", path, {
    method,
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    ...(method === "POST" ? { body: new URLSearchParams(fields).toString() } : {}),
    signal: AbortSignal.timeout(18000),
  });
  const data = await response.json();
  if (!response.ok || Number(data.responseCode) !== 200) throw new Error("Storage unavailable");
  process.stdout.write(JSON.stringify(data));
} catch {
  process.stdout.write(JSON.stringify({ responseCode: 503, message: "Registration storage unavailable." }));
  process.exitCode = 1;
}
