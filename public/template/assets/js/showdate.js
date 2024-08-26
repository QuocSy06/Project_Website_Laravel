document.addEventListener('DOMContentLoaded', (event) => {
    const currentDateElement = document.getElementById('current-date');
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    const currentDate = new Date().toLocaleDateString('vi-VN', options);
    currentDateElement.textContent = currentDate;
});
