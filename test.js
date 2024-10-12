document.addEventListener('DOMContentLoaded', function () {
    let selectedSlot = null;
    let selectedDate = null;

    fetch('/api/get-slots')
        .then(response => response.json())
        .then(data => {
            slotdata = data.slots;
            renderSlots(slotdata);
        })
        .catch(error => console.error('Error fetching slots:', error));

    function renderSlots(slots) {
        const slotGrid = document.getElementById("slotGrid");
        slotGrid.innerHTML = '';
        slots.forEach(st => {
            const slotCart = `
                <button class="bg-gray-100 border-[1px] p-3 rounded-[10px] font-[600] text-[18px] hover:bg-orange-400" data-slot="${st.slot}">
                    ${st.slot}
                </button>
            `;
            slotGrid.innerHTML += slotCart;
        });

        // Add event listeners to the slot buttons
        const slotButtons = document.querySelectorAll('#slotGrid button');
        slotButtons.forEach(button => {
            button.addEventListener('click', function () {
                continueBtn.classList.remove('bg-orange-400')
                continueBtn.classList.add('bg-orange-400')
                selectedSlot = this.getAttribute('data-slot');
                console.log('Selected Slot:', selectedSlot);
            });
           
        });
    }

    const selectedServices = JSON.parse(localStorage.getItem('selectedServices')) || [];
    const selectedServicesContainer = document.getElementById('selected-services');
    const totalAmount = document.getElementById("total-amount");
    const getStaff = document.getElementById("staff_name");
    let totalPrice = 0;

    selectedServices.forEach(service => {
        totalPrice += parseFloat(service.price);
        getStaff.textContent = service.staff.name;
        selectedServicesContainer.innerHTML += `
            <div class="mb-3 border-b-1 border-b-[1px] pb-2">
                <div class="p-2 flex justify-between ">
                <div>
                    <p class="font-[400] text-[15px]">${service.name}</p>
                    <span class="text-[13px] text-gray-400 flex gap-2 items-center">${service.duration} <p class="getStaff font-[600] text-black text-[15px]">${service.staff.name}</p></span>
                    </div>
                    <h2 class="font-[600] text-[18px]"> £${service.price}</h2>
                </div>
            </div>
        <input type="hidden" id="serviceName" value="${service.id}" />
        `;
    });

    totalAmount.textContent = `£${totalPrice.toFixed(2)}`;

    // Calendar and Date Selection
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
            const formattedDate = `${String(dayNum).padStart(2, '0')}-${String(currentDay.getMonth() + 1).padStart(2, '0')}-${currentDay.getFullYear().toString().slice(-2)}`;
            weekDays.innerHTML += `
                <button class="date-btn">
                    <div class="w-[70px] h-[70px] rounded-[50%] text-center ${isToday ? 'bg-orange-500' : 'bg-orange-100'} font-[700] text-[24px] pt-[14px] hover:bg-orange-500">
                        <h5>${dayNum}</h5>
                    </div>
                    <input type="hidden" value="${formattedDate}" />
                    <span class="text-gray-600 font-[500]">${dayName}</span>
                </button>
            `;
        }

        currentMonth.innerText = startDate.toLocaleString('default', { month: 'long', year: 'numeric' });

        // Add event listeners to date buttons
        const dateButtons = document.querySelectorAll('.date-btn');
        dateButtons.forEach(button => {
            button.addEventListener('click', function () {
                selectedDate = button.querySelector('input').value;
                console.log('Selected Date:', selectedDate);
            });
        });
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
        const selectedDateValue = new Date(event.target.value);
        if (!isNaN(selectedDateValue)) {
            startDate = new Date(selectedDateValue);
            renderWeek(startDate);
        }
    });

    // Initial render of the week
    renderWeek(startDate);

    // Handle Continue button click
    var continueBtn = document.getElementById("continue-btn")
    continueBtn.addEventListener('click', function () {
        if (selectedDate && selectedSlot && selectedServices.length > 0) {
            const payload = {
                date: selectedDate,
                slot: selectedSlot,
                services: selectedServices
            };
            
             fetch('/api/book-service', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(payload)
            })
            .then(response => {
                if (response.redirected) {
                     window.location.href = response.url;  
                } else {
                    return response.json();  
                }
            })
                .then(data => {
                    if (data.success) {
                        localStorage.removeItem('selectedServices');
                        window.location.href = '/checkout';
                    } else {
                        console.error('Booking failed:', data.message);
                    }
                })
                .catch(error => console.error('Error booking appointment:', error));
        } else {
            console.log('Please select both a date, slot, and at least one service.');
        }
    });
});