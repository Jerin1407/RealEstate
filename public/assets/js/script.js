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


