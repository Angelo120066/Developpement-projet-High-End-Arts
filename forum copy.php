<?php include 'connect_bdd.php'; ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="forum copy.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Bagel+Fat+One&family=Italiana&display=swap" rel="stylesheet">
        <title>High-End Arts</title>
    </head>
    <body>
        <header>
            <div class="header-container">
                <img id="logo" src="Angelo images/Angelo Logo High-end Arts canva.png" alt="Logo High-End Arts">
                <nav>
                    <ul class="header-links">
                        <li><a href="#gallery">Galerie</a></li>
                        <li><a href="#about">À propos</a></li>
                        <li><a href="#post">Publier</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
                <img id="photo-profil-utilisateurs" src="Logos/user.png" alt="Profil utilisateur" title="Votre profil">
            </div>
        </header>

        <main>
            <section id="hero-section">
                <div class="hero-content">
                    <h1>Bienvenue sur High-End Arts</h1>
                    <p>Découvrez l’art moderne et partagez vos créations avec une communauté passionnée.</p>
                    <button class="cta-button" id="ctaButton">Rejoignez-nous</button>
                </div>
                <div class="hero-image">
                    <img src="Angelo images/portrait-de-femme-abstraite-moderne.jpg" alt="Art abstrait" class="responsive-image">
                </div>
            </section>

            <section id="gallery">
                <h2>Galerie</h2>
                <p>Explorez nos œuvres les plus populaires.</p>
                <div class="image-grid">
                    <img src="Angelo images/image.png" alt="Oeuvre 1">
                    <img src="Angelo images/image (5).png" alt="Oeuvre 2">
                    <img src="Angelo images\F_Abderrahim_-_Beautiful_female_portrait_Acrylic_abstract_painting_Canvas_Art_prints_-_(MeisterDrucke-1479959).jpg" alt="Oeuvre 3">
                    <img src="Angelo images/images (3).jpg" alt="Oeuvre 4">
                </div>
                <a href="#" class="view-more">Voir plus</a>
            </section>

            <section id="about">
                <h2>À propos de nous</h2>
                <p>High-End Arts est une plateforme unique qui met en valeur l’art contemporain et moderne. Rejoignez notre communauté d'artistes et de passionnés d'art pour échanger et partager des inspirations.</p>
            </section>

            <section id="testimonials">
                <h2>Témoignages</h2>
                <div class="testimonials-container">
                    <div class="testimonial">
                        <img src="images/testimonial1.jpg" alt="Portrait de Marie, utilisatrice de la plateforme">
                        <p>"Une plateforme exceptionnelle pour les artistes modernes !"</p>
                        <h4>- Marie</h4>
                    </div>
                    <div class="testimonial">
                        <img src="images/testimonial2.jpg" alt="Portrait de Lucas, utilisateur de la plateforme">
                        <p>"J’adore découvrir de nouvelles créations et partager mes œuvres."</p>
                        <h4>- Lucas</h4>
                    </div>
                    <div class="testimonial">
                        <img src="images/testimonial2.jpg" alt="Portrait de Thomas, utilisateur de la plateforme">
                        <p>"J’adore découvrir de nouvelles créations et partager mes œuvres."</p>
                        <h4>- Lucas</h4>
                    </div>
                </div>
            </section>
            
            

            <section id="post">
                <h2>Publiez votre œuvre</h2>
                <p>Partagez votre art avec la communauté en téléchargeant vos créations ici.</p>
                <form action='' id="postForm">
                    <input type="text" placeholder="Titre de l'œuvre" required>
                    <textarea placeholder="Description de l'œuvre" rows="5" required></textarea>
                    <input type="file" accept="image/*" required>
                    <button type="submit">Publier</button>
                </form>
            </section>

            <section id="contact">
                <h2>Contactez-nous</h2>
                <p>Besoin d'aide ou d'informations ? Envoyez-nous un message.</p>
                <form id="contactForm">
                    <input type="text" placeholder="Votre nom" required>
                    <input type="email" placeholder="Votre email" required>
                    <textarea placeholder="Votre message" rows="5" required></textarea>
                    <button type="submit">Envoyer</button>
                </form>
            </section>
        </main>

        <div id="chat-box" class="chat-box">
            <div class="chat-header">
                <span>Chat en direct</span>
                <button id="chatToggle">×</button>
            </div>
            <div class="chat-body">
                <div class="messages">
                    <div class="message received">Bonjour ! Comment puis-je vous aider ?</div>
                </div>
                <div class="chat-input">
                    <input type="text" id="chatInput" placeholder="Écrivez un message...">
                    <button id="sendMessage">Envoyer</button>
                </div>
            </div>
        </div>

        <footer>
            <p>&copy; 2024 High-End Arts. Tous droits réservés.</p>
            <ul class="social-links">
                <li><a href="#"><img src="Angelo images/facebook-icon.png" alt="Facebook"></a></li>
                <li><a href="#"><img src="Angelo images/instagram-icon.png" alt="Instagram"></a></li>
                <li><a href="#"><img src="Angelo images/twitter-icon.png" alt="Twitter"></a></li>
            </ul>
        </footer>

        <script>
            // Bouton CTA - Scroll vers Galerie
            document.getElementById('ctaButton').addEventListener('click', function() {
                document.getElementById('gallery').scrollIntoView({ behavior: 'smooth' });
            });

            // Formulaire Contact - Validation simple
            document.getElementById('contactForm').addEventListener('submit', function(event) {
                event.preventDefault(); // Empêcher le rechargement de la page
                alert('Merci pour votre message. Nous vous répondrons bientôt !');
                event.target.reset(); // Réinitialiser le formulaire
            });

            // Formulaire de publication - Validation simple
            document.getElementById('postForm').addEventListener('submit', function(event) {
                event.preventDefault();
                alert('Votre œuvre a été publiée avec succès !');
                event.target.reset();
            });

            // Témoignages - Animation au survol
            const testimonials = document.querySelectorAll('.testimonial');
            testimonials.forEach(function(testimonial) {
                testimonial.addEventListener('mouseenter', function() {
                    testimonial.style.transform = 'scale(1.05)';
                    testimonial.style.transition = 'transform 0.3s ease';
                });
                testimonial.addEventListener('mouseleave', function() {
                    testimonial.style.transform = 'scale(1)';
                });
            });

            // Chatbox toggle
            const chatBox = document.getElementById('chat-box');
            const chatToggle = document.getElementById('chatToggle');

            chatToggle.addEventListener('click', function() {
                chatBox.classList.toggle('active');
            });

            // Chat input
            const chatInput = document.getElementById('chatInput');
            const sendMessage = document.getElementById('sendMessage');
            const messages = document.querySelector('.messages');

            sendMessage.addEventListener('click', function() {
                const message = chatInput.value.trim();
                if (message) {
                    const userMessage = document.createElement('div');
                    userMessage.classList.add('message', 'sent');
                    userMessage.textContent = message;
                    messages.appendChild(userMessage);
                    chatInput.value = '';

                    // Scroll to the latest message
                    messages.scrollTop = messages.scrollHeight;

                    // Simulate a response
                    setTimeout(() => {
                        const botMessage = document.createElement('div');
                        botMessage.classList.add('message', 'received');
                        botMessage.textContent = "Merci pour votre message. Nous reviendrons vers vous bientôt !";
                        messages.appendChild(botMessage);
                        messages.scrollTop = messages.scrollHeight;
                    }, 1000);
                }
            });

            // Sélection de la chatbox
                const chatBox = document.querySelector('.chat-box');

                // Ajout d'un événement de clic
                chatBox.addEventListener('click', function (e) {
                    // Si la boîte est fermée, ouvrez-la
                    if (!chatBox.classList.contains('active')) {
                        chatBox.classList.add('active');
                    } else if (e.target.id === 'chatToggle') {
                        // Si le bouton "×" est cliqué, fermez la boîte
                        chatBox.classList.remove('active');
                    }
                });

        </script>

    </body>
</html>
