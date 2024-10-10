const weekDays = document.getElementById('weekDays');
const currentMonth = document.getElementById('currentMonth');
const datePicker = document.getElementById('datePicker'); 

let today = new Date();
let startDate = new Date(today);

function renderWeek(startDate) {
    weekDays.innerHTML = '';
    const dayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    for (let i = 0; i < 7; i++) {
        const currentDay = new Date(startDate);
        currentDay.setDate(startDate.getDate() + i);

        const dayNum = currentDay.getDate();
        const dayName = dayNames[currentDay.getDay()];
        const isToday = currentDay.toDateString() === today.toDateString();
        weekDays.innerHTML += `
            <button>
                <div class="w-[70px] h-[70px] rounded-[50%] text-center ${isToday ? 'bg-orange-500' : 'bg-orange-100'} font-[700] text-[24px] pt-[14px]">
                    <h5>${dayNum}</h5>
                </div>
                <span class="text-gray-600 font-[500]">${dayName}</span>
            </button>
        `;
    }

    currentMonth.innerText = startDate.toLocaleString('default', { month: 'long', year: 'numeric' });
}

// Handle Previous and Next Week buttons
document.getElementById('prevWeek').addEventListener('click', () => {
    startDate.setDate(startDate.getDate() - 7);
    renderWeek(startDate);
});

document.getElementById('nextWeek').addEventListener('click', () => {
    startDate.setDate(startDate.getDate() + 7);
    renderWeek(startDate);
});

datePicker.addEventListener('change', (event) => {
    const selectedDate = new Date(event.target.value);
    if (!isNaN(selectedDate)) {
        startDate = new Date(selectedDate);
        renderWeek(startDate);
    }
});

// Initial render
renderWeek(startDate);
