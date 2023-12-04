console.log("está funcionando");

const logoutBtn = document.getElementById("logout-btn");

if (logoutBtn) {
  logoutBtn.addEventListener('click', (e) => {
    e.preventDefault();

    const form = logoutBtn.closest('form');
  
    if (form) {
      form.submit();
      console.log('Logout success')
    } else {
      console.log('Logout failure');
    }
  });
}