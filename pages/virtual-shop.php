<?php
// Virtual Shop Page
?>

<div class="virtual-shop-container">

    <!-- Intro Layer -->
    <div id="intro-layer" class="intro-layer">
        <div class="intro-content">
            <h1 class="intro-title">APSS TradeSphere LLP</h1>
            <p class="intro-subtitle">Entering Virtual Showroom...</p>
        </div>
    </div>

    <!-- Panorama Viewer -->
    <div id="panorama-viewer" class="panorama-viewer">
        <div id="panorama-layer" class="panorama-layer"
            style="background-image: url('<?php echo base_url(asset('images/virtual_showroom_diverse.png')); ?>');">

            <!-- 
                Reverted to Standard Hotspot System:
                Hotspots are now pulsing dots placed relative to the background image.
                This is cleaner than floating images and matches the classic "Virtual Tour" aesthetic.
            -->

            <!-- Shelf 1 (Upper) -->
            <div class="hotspot" style="top: 40%; left: 10%;" data-product="turmeric">
                <div class="hotspot-pulse"></div>
                <div class="hotspot-label">Turmeric</div>
            </div>

            <div class="hotspot" style="top: 40%; left: 23%;" data-product="red-chilli">
                <div class="hotspot-pulse"></div>
                <div class="hotspot-label">Red Chilli</div>
            </div>

            <div class="hotspot" style="top: 40%; left: 36%;" data-product="black-pepper">
                <div class="hotspot-pulse"></div>
                <div class="hotspot-label">Black Pepper</div>
            </div>

            <div class="hotspot" style="top: 40%; left: 49%;" data-product="coriander">
                <div class="hotspot-pulse"></div>
                <div class="hotspot-label">Coriander</div>
            </div>

            <div class="hotspot" style="top: 40%; left: 62%;" data-product="clove">
                <div class="hotspot-pulse"></div>
                <div class="hotspot-label">Clove</div>
            </div>

            <div class="hotspot" style="top: 40%; left: 75%;" data-product="honey">
                <div class="hotspot-pulse"></div>
                <div class="hotspot-label">Honey</div>
            </div>

            <div class="hotspot" style="top: 40%; left: 88%;" data-product="coconut-oil">
                <div class="hotspot-pulse"></div>
                <div class="hotspot-label">Coconut Oil</div>
            </div>

            <!-- Shelf 2 (Middle) -->
            <div class="hotspot" style="top: 60%; left: 10%;" data-product="basmati-rice">
                <div class="hotspot-pulse"></div>
                <div class="hotspot-label">Basmati Rice</div>
            </div>

            <div class="hotspot" style="top: 60%; left: 25%;" data-product="maize">
                <div class="hotspot-pulse"></div>
                <div class="hotspot-label">Maize</div>
            </div>

            <div class="hotspot" style="top: 60%; left: 40%;" data-product="makhana">
                <div class="hotspot-pulse"></div>
                <div class="hotspot-label">Makhana</div>
            </div>

            <div class="hotspot" style="top: 60%; left: 55%;" data-product="chicken-masala">
                <div class="hotspot-pulse"></div>
                <div class="hotspot-label">Chicken Masala</div>
            </div>

            <div class="hotspot" style="top: 60%; left: 68%;" data-product="garam-masala">
                <div class="hotspot-pulse"></div>
                <div class="hotspot-label">Garam Masala</div>
            </div>

            <div class="hotspot" style="top: 60%; left: 81%;" data-product="mutton-masala">
                <div class="hotspot-pulse"></div>
                <div class="hotspot-label">Mutton Masala</div>
            </div>

            <!-- Shelf 3 (Lower/Table) -->
            <div class="hotspot" style="top: 75%; left: 30%;" data-product="areca-leaf-items">
                <div class="hotspot-pulse"></div>
                <div class="hotspot-label">Areca Leaf Products</div>
            </div>

            <div class="hotspot" style="top: 75%; left: 50%;" data-product="sambhar-powder">
                <div class="hotspot-pulse"></div>
                <div class="hotspot-label">Sambhar Powder</div>
            </div>

            <div class="hotspot" style="top: 75%; left: 70%;" data-product="sugar-cane-items">
                <div class="hotspot-pulse"></div>
                <div class="hotspot-label">Bagasse Plates</div>
            </div>

        </div>

        <div class="instruction-overlay">
            <p>Drag to Look Around &bull; Click on Pulsing Dots</p>
        </div>
    </div>

    <!-- Product Detail Modal -->
    <div id="product-modal" class="product-modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <div class="modal-body">
                <div class="modal-image">
                    <img id="modal-img" src="" alt="Product">
                </div>
                <div class="modal-info">
                    <h2 id="modal-title" class="text-gold">Product Name</h2>
                    <p id="modal-desc">Description goes here.</p>
                    <div class="modal-quality">
                        <h3>Quality Assurance</h3>
                        <p id="modal-quality">Quality info goes here.</p>
                    </div>
                    <a id="modal-link" href="#" class="btn btn-primary" style="margin-top: 20px;">View Full Details</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .virtual-shop-container {
        position: relative;
        width: 100%;
        height: 85vh;
        overflow: hidden;
        background-color: #000;
        user-select: none;
        perspective: 1000px;
    }

    .panorama-viewer {
        width: 100%;
        height: 100%;
        cursor: grab;
        position: relative;
        overflow: hidden;
        /* Intro Animation State */
        transform: scale(0.3);
        opacity: 0;
        filter: blur(10px);
        animation: approachShop 4s cubic-bezier(0.25, 1, 0.5, 1) forwards;
    }

    @keyframes approachShop {
        0% {
            transform: scale(0.3);
            opacity: 0;
            filter: blur(10px);
        }

        20% {
            opacity: 1;
        }

        100% {
            transform: scale(1);
            opacity: 1;
            filter: blur(0px);
        }
    }

    .intro-layer {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 100;
        text-align: center;
        pointer-events: none;
        animation: fadeText 3s ease-in forwards 1s;
    }

    @keyframes fadeText {
        to {
            opacity: 0;
            visibility: hidden;
        }
    }

    .intro-content {
        color: white;
        background: rgba(0, 0, 0, 0.5);
        padding: 20px 40px;
        border-radius: 8px;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.8);
    }

    .intro-title {
        font-size: 3rem;
        margin-bottom: 10px;
        color: var(--color-gold, #ffcc00);
    }

    .panorama-viewer:active {
        cursor: grabbing;
    }

    .panorama-layer {
        height: 100%;
        width: 3000px;
        position: absolute;
        top: 0;
        left: 0;
        will-change: transform;
        background-size: cover;
        background-position: center;
        background-repeat: repeat-x;
    }

    /* Standard Hotspot Styling */
    .hotspot {
        position: absolute;
        width: 40px;
        height: 40px;
        transform: translate(-50%, -50%);
        cursor: pointer;
        z-index: 10;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .hotspot-pulse {
        width: 20px;
        height: 20px;
        background-color: var(--color-gold, #ffcc00);
        border-radius: 50%;
        box-shadow: 0 0 0 rgba(217, 134, 0, 0.4);
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(217, 134, 0, 0.7);
        }

        70% {
            box-shadow: 0 0 0 20px rgba(217, 134, 0, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(217, 134, 0, 0);
        }
    }

    .hotspot-label {
        background: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 4px 8px;
        border-radius: 4px;
        margin-top: 5px;
        font-size: 12px;
        white-space: nowrap;
        opacity: 0;
        transition: opacity 0.3s;
        pointer-events: none;
    }

    .hotspot:hover .hotspot-label {
        opacity: 1;
    }


    .instruction-overlay {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        background: rgba(0, 0, 0, 0.6);
        color: white;
        padding: 10px 20px;
        border-radius: 20px;
        pointer-events: none;
        z-index: 20;
    }

    .product-modal {
        display: none;
        position: fixed;
        z-index: 2000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.8);
        align-items: center;
        justify-content: center;
    }

    .product-modal.show {
        display: flex;
        animation: modalPop 0.3s ease-out;
    }

    @keyframes modalPop {
        from {
            transform: scale(0.9);
            opacity: 0;
        }

        to {
            transform: scale(1);
            opacity: 1;
        }
    }

    .modal-content {
        background-color: #fefefe;
        padding: 0;
        border: 1px solid #888;
        width: 90%;
        max-width: 800px;
        border-radius: 10px;
        position: relative;
        overflow: hidden;
    }

    .close-modal {
        color: #aaa;
        position: absolute;
        top: 10px;
        right: 20px;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
        z-index: 10;
        background: white;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
    }

    .close-modal:hover {
        color: black;
    }

    .modal-body {
        display: flex;
        flex-direction: row;
    }

    .modal-image {
        flex: 1;
        background: #eee;
        min-height: 300px;
    }

    .modal-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .modal-info {
        flex: 1;
        padding: 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    @media (max-width: 768px) {
        .modal-body {
            flex-direction: column;
        }

        .modal-image {
            height: 200px;
        }
    }
</style>

<script>
    // Product Data
    const products = {
        'turmeric': {
            title: "Turmeric (Haldi)",
            desc: "The Golden Spice of Life. Known for its high curcumin content and medicinal properties.",
            quality: "Double polished, high curcumin content (>3%), zero lead chromate.",
            image: "<?php echo base_url(asset('images/products/turmeric-large.jpg')); ?>",
            link: "<?php echo base_url('turmeric'); ?>"
        },
        'red-chilli': {
            title: "Red Chilli (Mirch)",
            desc: "The Fiery Soul of Indian Cuisine. Sourced from Guntur for perfect heat and color.",
            quality: "Stem-cut, high pungency (SHU 20000+), rich red color (ASTA 100+).",
            image: "<?php echo base_url(asset('images/products/red-chilli-large.jpg')); ?>",
            link: "<?php echo base_url('red-chilli'); ?>"
        },
        'black-pepper': {
            title: "Black Pepper",
            desc: "The King of Spices. Adds heat and depth to any dish.",
            quality: "MG-1 grade, bold berries, high piperine content.",
            image: "<?php echo base_url(asset('images/products/black-pepper-large.jpg')); ?>",
            link: "<?php echo base_url('black-pepper'); ?>"
        },
        'coriander': {
            title: "Coriander",
            desc: "Fresh and aromatic. Essential for thickening curries and adding flavor.",
            quality: "Green color, high essential oil content, split/whole available.",
            image: "<?php echo base_url(asset('images/products/coriander-large.jpg')); ?>",
            link: "<?php echo base_url('coriander'); ?>"
        },
        'clove': {
            title: "Clove",
            desc: "Aromatic flower buds. Essential for garam masala and teas.",
            quality: "Hand-picked, rich oil content, reddish-brown color.",
            image: "<?php echo base_url(asset('images/products/clove-large.jpg')); ?>",
            link: "<?php echo base_url('clove'); ?>"
        },
        'chicken-masala': {
            title: "Chicken Masala",
            desc: "Perfect blend for chicken curries.",
            quality: "Authentic recipe, no artificial colors, rich aroma.",
            image: "<?php echo base_url(asset('images/product-chicken-masala.jpg')); ?>",
            link: "<?php echo base_url('chicken-masala'); ?>"
        },
        'garam-masala': {
            title: "Garam Masala",
            desc: "The universal spice blend for Indian cooking.",
            quality: "Roasted spices, balanced flavor, high potency.",
            image: "<?php echo base_url(asset('images/product-garam-masala.jpg')); ?>",
            link: "<?php echo base_url('garam-masala'); ?>"
        },
        'mutton-masala': {
            title: "Mutton Masala",
            desc: "Robust spice mix for red meat dishes.",
            quality: "Traditional formula, deep color, intense flavor.",
            image: "<?php echo base_url(asset('images/product-mutton-masala.jpg')); ?>",
            link: "<?php echo base_url('mutton-masala'); ?>"
        },
        'sambhar-powder': {
            title: "Sambhar Powder",
            desc: "Authentic South Indian taste.",
            quality: "Made with dal and spices, perfect for sambhar.",
            image: "<?php echo base_url(asset('images/product-sambhar-powder.jpg')); ?>",
            link: "<?php echo base_url('sambhar-powder'); ?>"
        },
        'makhana': {
            title: "Makhana (Fox Nuts)",
            desc: "Premium quality popped lotus seeds, a healthy superfood snack from Bihar.",
            quality: "6 Sut+ size, white color, moisture < 5%, naturally processed.",
            image: "<?php echo base_url(asset('images/product-makhana.jpg')); ?>",
            link: "<?php echo base_url('makhana'); ?>"
        },
        'basmati-rice': {
            title: "Basmati Rice",
            desc: "The aromatic queen of rice. Extra long grain with distinct fragrance.",
            quality: "Aged for 2 years, length > 8mm, 0% broken grains.",
            image: "<?php echo base_url(asset('images/products/basmati-rice.jpg')); ?>",
            link: "<?php echo base_url('basmati-rice'); ?>"
        },
        'maize': {
            title: "Maize (Corn)",
            desc: "High-quality yellow maize sourced for animal feed and human consumption.",
            quality: "Moisture < 14%, low foreign matter, high nutritional value.",
            image: "<?php echo base_url(asset('images/product-maize.png')); ?>",
            link: "<?php echo base_url('maize'); ?>"
        },
        'honey': {
            title: "Pure Honey",
            desc: "100% pure and organic honey sourced from finest apiaries.",
            quality: "No added sugar, antibiotic free, high pollen count.",
            image: "<?php echo base_url(asset('images/product-honey.png')); ?>",
            link: "<?php echo base_url('honey'); ?>"
        },
        'areca-leaf-items': {
            title: "Areca Leaf Products",
            desc: "Eco-friendly, biodegradable plates and bowls made from fallen Areca palm leaves.",
            quality: "Chemical free, microwave safe, sturdy and leak proof.",
            image: "<?php echo base_url(asset('images/product-areca-leaf.jpg')); ?>",
            link: "<?php echo base_url('areca-leaf-items'); ?>"
        },
        'sugar-cane-items': {
            title: "Bagasse Plates",
            desc: "Sustainable tableware made from sugar cane residue (bagasse).",
            quality: "Compostable, strong, oil resistant, alternative to plastic.",
            image: "<?php echo base_url(asset('images/product-sugar-cane.png')); ?>",
            link: "<?php echo base_url('sugar-cane-items'); ?>"
        },
        'coconut-oil': {
            title: "Coconut Oil",
            desc: "Pure, cold-pressed coconut oil for cooking and wellness.",
            quality: "100% natural, unrefined, rich in lauric acid.",
            image: "<?php echo base_url(asset('images/products/coconut-oil-large.jpg')); ?>",
            link: "<?php echo base_url('coconut-oil'); ?>"
        }
    };

    document.addEventListener('DOMContentLoaded', function () {
        const viewer = document.getElementById('panorama-viewer');
        const layer = document.getElementById('panorama-layer');

        let isDown = false;
        let startX;
        let currentTranslate = 0;
        let isAutoScrolling = true;
        let autoScrollSpeed = 0.8;

        function animate() {
            if (isAutoScrolling && !isDown) {
                currentTranslate -= autoScrollSpeed;

                // Wrap logic for seamless loop
                if (currentTranslate < -1500) {
                    currentTranslate += 1500;
                }
            }

            layer.style.transform = `translateX(${currentTranslate}px)`;

            requestAnimationFrame(animate);
        }

        setTimeout(() => {
            animate();
        }, 1000);


        // Interaction Handlers (Mouse)
        viewer.addEventListener('mousedown', (e) => {
            isDown = true;
            isAutoScrolling = false;
            viewer.classList.add('active');
            startX = e.pageX - viewer.offsetLeft;
        });

        viewer.addEventListener('mouseleave', () => {
            isDown = false;
            if (!document.getElementById('product-modal').classList.contains('show')) {
                isAutoScrolling = true;
            }
            viewer.classList.remove('active');
        });

        viewer.addEventListener('mouseup', () => {
            isDown = false;
            if (!document.getElementById('product-modal').classList.contains('show')) {
                isAutoScrolling = true;
            }
            viewer.classList.remove('active');
        });

        viewer.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - viewer.offsetLeft;
            const walk = (x - startX) * 1.5;

            currentTranslate += walk;
            startX = x;

            if (currentTranslate > 0) currentTranslate -= 1500;
            if (currentTranslate < -1500) currentTranslate += 1500;
        });

        // --- Touch Support ---
        viewer.addEventListener('touchstart', (e) => {
            isDown = true;
            isAutoScrolling = false;
            startX = e.touches[0].pageX - viewer.offsetLeft;
        });

        viewer.addEventListener('touchend', () => {
            isDown = false;
            if (!document.getElementById('product-modal').classList.contains('show')) {
                isAutoScrolling = true;
            }
        });

        viewer.addEventListener('touchmove', (e) => {
            if (!isDown) return;
            const x = e.touches[0].pageX - viewer.offsetLeft;
            const walk = (x - startX) * 1.5;

            currentTranslate += walk;
            startX = x;

            if (currentTranslate > 0) currentTranslate -= 1500;
            if (currentTranslate < -1500) currentTranslate += 1500;
        });


        // Hotspot Click (Now Scene Item Click)
        document.querySelectorAll('.hotspot').forEach(spot => {
            spot.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();

                isAutoScrolling = false;
                isDown = false;

                const productKey = this.getAttribute('data-product');
                const data = products[productKey];

                if (data) {
                    showModal(data);
                }
            });
            spot.addEventListener('touchstart', function (e) { e.stopPropagation(); });
        });

        // Modal
        const modal = document.getElementById('product-modal');
        const closeBtn = document.querySelector('.close-modal');

        function showModal(data) {
            document.getElementById('modal-title').textContent = data.title;
            document.getElementById('modal-desc').textContent = data.desc;
            document.getElementById('modal-quality').textContent = data.quality;
            document.getElementById('modal-img').src = data.image;
            // Verify link is valid before setting
            const finalLink = data.link;
            const linkBtn = document.getElementById('modal-link');
            
            linkBtn.href = finalLink;
            
            // Explicit click handler to ensure navigation works
            linkBtn.onclick = function(e) {
                e.stopPropagation(); // Prevent bubbling issues
                window.location.href = finalLink;
            };

            modal.classList.add('show');
            isAutoScrolling = false;
        }

        function closeModal() {
            modal.classList.remove('show');
            isAutoScrolling = true;
            isDown = false;
        }

        closeBtn.onclick = closeModal;

        window.onclick = function (event) {
            if (event.target == modal) {
                closeModal();
            }
        }
    });
</script>