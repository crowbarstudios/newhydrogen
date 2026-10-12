(() => {
  const form = document.querySelector("[data-confirmed-signup]");
  if (!form) return;
  const button = form.querySelector('button[type="submit"]');
  const consent = form.elements.namedItem("marketing_consent");
  const status = document.getElementById("redSignupStatus");
  form.addEventListener("submit", async (event) => {
    event.preventDefault();
    if (button.disabled || !form.reportValidity()) return;
    const submission = new FormData(form);
    const original = button.textContent;
    button.disabled = true;
    if (consent) consent.disabled = true;
    button.textContent = "Saving…";
    form.setAttribute("aria-busy", "true");
    status.textContent = "";
    try {
      const response = await fetch(form.action, {
        method: "POST",
        body: submission,
        credentials: "same-origin",
        headers: { Accept: "application/json" },
      });
      const data = await response.json();
      if (!response.ok || data.ok !== true || data.redirect !== "/thank-you") {
        throw new Error(data.message || "We could not confirm your registration. Please try again.");
      }
      // This response is issued only after Jotform read-back confirms the saved email.
      window.location.assign(data.redirect);
    } catch (error) {
      status.textContent = error instanceof Error ? error.message : "We could not confirm your registration. Please try again.";
      button.disabled = false;
      if (consent) consent.disabled = false;
      button.textContent = original;
      form.removeAttribute("aria-busy");
    }
  });
})();
