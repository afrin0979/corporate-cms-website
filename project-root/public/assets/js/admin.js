// ------------------------------
// Sidebar Toggle (Collapsible)
// ------------------------------
const sidebar = document.querySelector('.sidebar');
const toggleBtn = document.querySelector('#sidebarToggle');

if(toggleBtn){
    toggleBtn.addEventListener('click', () => {
        sidebar.classList.toggle('collapsed');
    });
}

// Optional: change main-content margin when collapsed
const mainContent = document.querySelector('.main-content');
if(sidebar && mainContent){
    sidebar.addEventListener('transitionend', () => {
        if(sidebar.classList.contains('collapsed')){
            mainContent.style.marginLeft = '60px';
        } else {
            mainContent.style.marginLeft = '250px';
        }
    });
}

// ------------------------------
// Form Validation (Simple)
// ------------------------------
const forms = document.querySelectorAll('form');

forms.forEach(form => {
    form.addEventListener('submit', (e) => {
        let valid = true;
        const requiredFields = form.querySelectorAll('[required]');

        requiredFields.forEach(field => {
            if(!field.value.trim()){
                valid = false;
                field.style.border = '2px solid red';
            } else {
                field.style.border = '1px solid #cbd5e1';
            }
        });

        if(!valid){
            e.preventDefault();
            alert('Please fill all required fields!');
        }
    });
});

// ------------------------------
// Table Search / Filter
// ------------------------------
const searchInputs = document.querySelectorAll('.table-search');

searchInputs.forEach(input => {
    input.addEventListener('keyup', () => {
        const tableId = input.dataset.table;
        const filter = input.value.toLowerCase();
        const table = document.querySelector(`#${tableId}`);
        if(table){
            const rows = table.querySelectorAll('tbody tr');
            rows.forEach(row => {
                const text = row.textContent.toLowerCase();
                row.style.display = text.includes(filter) ? '' : 'none';
            });
        }
    });
});

// ------------------------------
// Confirm Delete Button
// ------------------------------
const deleteButtons = document.querySelectorAll('.btn-delete');

deleteButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
        const confirmDelete = confirm('Are you sure you want to delete this item?');
        if(!confirmDelete){
            e.preventDefault();
        }
    });
});