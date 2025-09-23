// app.js

// Fungsi untuk merender data mahasiswa ke tabel
function renderMahasiswaTable(data) {
    const tableBody = document.querySelector('#mahasiswaTable tbody');
    if (!tableBody) return;
    tableBody.innerHTML = '';
    data.forEach(mhs => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${mhs.student_id}</td>
            <td>${mhs.full_name}</td>
            <td>${mhs.username}</td>
            <td>${mhs.entry_year}</td>
            <td>
                <a href="${BASE_URL}admin/mahasiswa/edit/${mhs.student_id}" class="btn btn-edit">Edit</a>
                <a href="${BASE_URL}admin/mahasiswa/hapus/${mhs.student_id}" class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus data ${mhs.full_name}?')">Hapus</a>
            </td>
        `;
        tableBody.appendChild(row);
    });
}

// Fungsi untuk merender data mata kuliah ke tabel
function renderCourseTable(data) {
    const tableBody = document.querySelector('#courseTable tbody');
    if (!tableBody) return;
    tableBody.innerHTML = '';
    data.forEach(course => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${course.courses_id}</td>
            <td>${course.courses_name}</td>
            <td>${course.credits}</td>
            <td>
                <a href="${BASE_URL}admin/course/edit/${course.courses_id}" class="btn btn-edit">Edit </a>
                <a href="${BASE_URL}admin/course/hapus/${course.courses_id}" class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus mata kuliah ${course.courses_name}?')"> Hapus</a>
            </td>
        `;
        tableBody.appendChild(row);
    });
}

function renderCourseChecklist(data) {
    const tableBody = document.querySelector('#courseTable tbody');
    const totalSksSpan = document.getElementById('totalSks');
    const enrollForm = document.getElementById('enrollForm');

    if (!tableBody || !totalSksSpan || !enrollForm) {
        console.error("Elemen DOM untuk enroll courses tidak ditemukan.");
        return;
    }

    tableBody.innerHTML = '';
    let totalSks = 0;

    data.forEach(course => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td><input type="checkbox" name="selected_courses[]" value="${course.courses_id}" data-sks="${course.credits}"></td>
            <td>${course.courses_id}</td>
            <td>${course.courses_name}</td>
            <td>${course.credits}</td>
        `;
        tableBody.appendChild(row);
    });

    const checkboxes = document.querySelectorAll('#courseTable input[type="checkbox"]');
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', () => {
            let currentTotalSks = 0;
            const checkedBoxes = document.querySelectorAll('#courseTable input[type="checkbox"]:checked');
            checkedBoxes.forEach(checked => {
                currentTotalSks += parseInt(checked.getAttribute('data-sks'));
            });
            totalSksSpan.textContent = currentTotalSks;
        });
    });
}

//Fungsi untuk merender data mycourse ke tabel
function renderMyCourseTable(data) {
    const tableBody = document.querySelector('#mycourseTable tbody');
    if (!tableBody) return;
    tableBody.innerHTML = '';
    data.forEach(enroll => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${enroll.student_id}</td>
            <td>${enroll.courses_name}</td>
            <td>${enroll.enroll_date}</td>
        `;
        tableBody.appendChild(row);
    });
}

function showStatusMessage(message, type, targetId) {
    const targetElement = document.getElementById(targetId);
    if (!targetElement) {
        console.error(`Target element with ID '${targetId}' not found.`);
        return;
    }
    
    const statusDiv = document.createElement('div');
    statusDiv.className = 'status-message';
    statusDiv.textContent = message;
    statusDiv.style.padding = '10px';
    statusDiv.style.margin = '10px 0';
    statusDiv.style.color = 'white';
    statusDiv.style.textAlign = 'center';
    statusDiv.style.borderRadius = '5px';
    statusDiv.style.backgroundColor = type === 'success' ? '#4CAF50' : '#f44336';
    
    const oldMessage = targetElement.querySelector('.status-message');
    if (oldMessage) {
        oldMessage.remove();
    }
    targetElement.prepend(statusDiv);

    setTimeout(() => {
        statusDiv.remove();
    }, 4000);
}

function handleFormValidation(formId) {
    const form = document.getElementById(formId);
    if (!form) {
        return;
    }

    form.addEventListener('submit', function(event) {
        let isFormEmpty = false;
        const requiredInputs = form.querySelectorAll('input[required]');

        requiredInputs.forEach(input => {
            input.style.border = '';
        });

        requiredInputs.forEach(input => {
            if (input.value.trim() === '') {
                isFormEmpty = true;
                input.style.border = '2px solid red';
            }
        });

        if (isFormEmpty) {
            event.preventDefault();
            const statusMessageDiv = form.querySelector('#formStatusMessage');
            if (statusMessageDiv) {
                showStatusMessage('Semua field wajib diisi!', 'error', statusMessageDiv.id);
            }
        }
    });
}

function setupActiveMenu(menuSelector) {
    const menuLinks = document.querySelectorAll(menuSelector + ' a');
    if (!menuLinks.length) return;

    const currentUrl = window.location.href;

    menuLinks.forEach(link => {
        if (currentUrl.includes(link.getAttribute('href'))) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
}

document.addEventListener('DOMContentLoaded', () => {
    
     setupActiveMenu('.menu');
    const successMessageEl = document.getElementById('php-success-message');
    const errorMessageEl = document.getElementById('php-error-message');
    //const contentDiv = document.querySelector('.content');

    if (successMessageEl && successMessageEl.textContent.trim() !== '') {
        showStatusMessage(successMessageEl.textContent.trim(), 'success', 'content');
    }
    
    if (errorMessageEl && errorMessageEl.textContent.trim() !== '') {
        showStatusMessage(errorMessageEl.textContent.trim(), 'error', 'content');
    }

    if (typeof mahasiswaData !== 'undefined') {
        renderMahasiswaTable(mahasiswaData);
    }

    if (typeof coursesData !== 'undefined') {
        renderCourseTable(coursesData);
    }

    if (typeof coursesData !== 'undefined' && document.getElementById('enrollForm')) {
        renderCourseChecklist(coursesData);
    }
    
    if (typeof myCoursesData !== 'undefined') {
    // Parsing string JSON menjadi objek JavaScript
        const parsedData = JSON.parse(myCoursesData); 
        renderMyCourseTable(parsedData);
    }
    
    // --- Validasi form kosong ---
    handleFormValidation('mahasiswaForm');
    handleFormValidation('courseForm');
    handleFormValidation('loginForm');
    handleFormValidation('mahasiswaEditForm');
    handleFormValidation('courseEditForm');
});