<main id="principal" class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo ?></h2>
    <p class="devwebcamp__descripcion">Conoce la conferencia más importante de Latinoamérica</p>

    <div class="devwebcamp__grid">
        <div class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300"  src="build/img/sobre_devwebcamp.jpg" alt="Imagen DevWebCamp">
            </picture>
        </div>
        
        <div class="devwebcamp__contenido">
            <p class="devwebcamp__texto">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis tortor mauris. Quisque a convallis dolor. 
            Ut id ex tellus. Etiam eu leo sit amet tellus vestibulum eleifend. Sed quis turpis diam. Curabitur 
            </p>
            <p class="devwebcamp__texto">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis tortor mauris. Quisque a convallis dolor. 
            Ut id ex tellus. Etiam eu leo sit amet tellus vestibulum eleifend. Sed quis turpis diam. Curabitur 
            </p>
        </div>
        
    </div>
</main>

<script>
    window.onload = function(){
        document.querySelector('#principal').scrollIntoView({
            behavior: 'smooth'
        });
    }
    
</script>