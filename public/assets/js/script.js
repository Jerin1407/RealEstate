function hello() {
  alert('Welcome!');
}

const adsButton = document.getElementById('adsButton');
        const adsSubMenu = document.getElementById('adsSubMenu');
        const adsArrow = document.getElementById('adsArrow');

        adsButton.addEventListener('click', () => {
            adsSubMenu.classList.toggle('hidden');
            adsArrow.classList.toggle('rotate-180');
        });

        // Optional: Close the menu if clicked outside
        document.addEventListener('click', function(event) {
            if (!adsButton.contains(event.target) && !adsSubMenu.contains(event.target)) {
                adsSubMenu.classList.add('hidden');
                adsArrow.classList.remove('rotate-180');
            }
        });

// add property
// function previewImage(event) {
//     const files = event.target.files;
//     const previewContainer = document.getElementById('previewContainer');
//     previewContainer.innerHTML = ""; // clear old previews

//     for (let i = 0; i < files.length; i++) {
//       const file = files[i];
//       const reader = new FileReader();

//       reader.onload = function(e) {
//         const img = document.createElement('img');
//         img.src = e.target.result;
//         img.className = "w-24 h-24 object-cover rounded border";
//         previewContainer.appendChild(img);
//       };

//       reader.readAsDataURL(file);
//     }
//   }

function previewImage(event) {
    const files = event.target.files;
    const previewContainer = document.getElementById('previewContainer');

    // Remove only previous NEW previews, not existing images
    document.querySelectorAll('.new-preview').forEach(el => el.remove());

    for (let i = 0; i < files.length; i++) {
        const file = files[i];
        const reader = new FileReader();

        reader.onload = function(e) {
            const div = document.createElement("div");
            div.classList.add("relative", "new-preview");

            div.innerHTML = `
                <img src="${e.target.result}" 
                     class="w-24 h-24 object-cover rounded border">
            `;

            previewContainer.appendChild(div);
        };

        reader.readAsDataURL(file);
    }
}

function previewImage(event) {
    const files = event.target.files;
    const previewContainer = document.getElementById('previewContainer_Request');

    // Remove only previous NEW previews, not existing images
    document.querySelectorAll('.new-preview').forEach(el => el.remove());

    for (let i = 0; i < files.length; i++) {
        const file = files[i];
        const reader = new FileReader();

        reader.onload = function(e) {
            const div = document.createElement("div");
            div.classList.add("relative", "new-preview");

            div.innerHTML = `
                <img src="${e.target.result}" 
                     class="w-24 h-24 object-cover rounded border">
            `;

            previewContainer.appendChild(div);
        };

        reader.readAsDataURL(file);
    }
}

   ClassicEditor
        .create(document.querySelector('#description'), {
            toolbar: [
                'heading', '|', 
                'bold', 'italic', 'underline', 'strikethrough', '|', 
                'link', 'bulletedList', 'numberedList', 'blockQuote', '|',
                'undo', 'redo'
            ]
        })
        .catch(error => {
            console.error(error);
        });


