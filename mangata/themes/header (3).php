<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php wp_head(); ?>
</head>
<style>
        
        body {
            margin: 0;
            padding: 0;
            font-family: Futura, "Trebuchet MS", Arial, sans-serif; /* Specify Futura font with fallbacks */
        }
   header {
            position: relative;
            
        }

        .sale-banner {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            text-align: center;
            background-color: pink;
            color: #fff;
            padding: 10px 0;
        }

        .menu-container {
            display: inline-block;
        }

        .menu {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
       .menu li {
            display: inline-block;
            margin-right: 4rem; /* Adjust spacing between menu items */
            font-size: 1.2rem; /* Change font size as needed */
        }

        .menu li:last-child {
            margin-right: 0; /* Remove margin from last menu item */
        }

        .middle-section {
            text-align: center;
        }

         .middle-section .logo img {
             width: 100%;
             margin: 0 auto;
            max-width: 60%; /* Change logo max-width to 25% */
        }
.search-container {
    position: relative;
}

.search-container input[type="text"] {
    padding-right: 30px; /* Adjust as needed based on icon size */
}

.search-container .search-icon {
    position: absolute;
    right: -5px;
    top: 50%;
    transform: translateY(-50%);
    width: 50px;
    height: auto;
}

        .hamburger-menu {
            display: none;
        }
        @media only screen and (max-width: 480px) {
            .menu {
                display: none; /* Hide regular menu on smaller screens */
            }
            .menu.show {
                display: flex; 
                flex-direction: column;
                align-items: center;
            }
            .menu li {
                margin-right: 0;
                margin-bottom: 1rem;
            }
            .middle-section, .right-section {
                flex: none; /* Reset to original width */
            }
            .icons {
                margin-left: 0; /* Remove left margin for icons */
            }
            .hamburger-menu {
                display: block; /* Show hamburger menu toggle button */
                cursor: pointer;
                margin-right: 1rem;
            }
            .search-form {
                margin-left: 1rem;
                margin-right: 0;
            }
            .container {
                flex-direction: column;
                text-align: center;
            }
            .left-section,
            .right-section {
                margin-top: 1rem;
            }
        }
.container {
    display: flex;
 justify-content: space-around; 
    align-items: center;
    margin: 0 auto;
    padding-top: 20px;
}

.left-section,
.middle-section,
.right-section {
    flex: 1;
}

.middle-section {
    text-align: center;
}


.middle-section .logo img {
    width: 100%;
    margin: 0 auto;
    max-width: 60%; /* Adjust the logo max-width to 60% */
}

/* Adjust the width of left and right sections */
.left-section,
.right-section {
    flex: 40%;
}

.middle-section {
    flex: 20%; 
    padding-top: 0.5rem;
}
.icons {
    align-items: center; /* Center icons vertically */
}

.icons a {
    display: inline-block;
    margin-left: 10px;
    flex-shrink: 0; /* Prevent icons from shrinking */
    width: 100%;
    max-width: 30%; /* Set maximum width for icons */
    height: auto; /* Maintain aspect ratio */
}
.right-section {
 display: flex;
    justify-content: flex-end; /* Align the content to the end (right) */
    align-items: center;
}
.icons {
    display: flex;
    align-items: center; /* Center icons vertically */
}

.icons a {
    display: inline-block;
    margin-left: 5px; /* Adjust margin between icons */
    flex-shrink: 0; /* Prevent icons from shrinking */
    width: 100%;
    max-width: 45%;
    min-width: 45%;/* Set maximum width for icons */
    height: auto; /* Maintain aspect ratio */
}

.search-form {
    margin-right: 5px; /* Adjust margin between search form and icons */
}

.right-section {
    padding-left: 10%; /* Push the right section to the end of the container */
}
</style>
<body <?php body_class(); ?>>
    <header>
        <div class="sale-banner">Winter sale, Up to 70%, Shop Now >> </div>
        <div class="container">
            <div class="left-section">
                <nav class="menu-container">
                    <ul class="menu">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary-menu',
                            'container' => '',
                            'items_wrap' => '%3$s', // Remove <div> wrapper from menu
                            'fallback_cb' => false // Remove default fallback behavior
                        ));
                        ?>
                    </ul>
                </nav>
                <div class="hamburger-menu" onclick="toggleMenu()">☰</div> 
            </div>
            <div class="middle-section">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpeg" alt="Site Logo" />
                </a>
            </div>
            <div class="right-section">
         <form class="search-form" action="/action_page.php" style="max-width:300px;">
    <div class="search-container">
        <input type="text" placeholder="Search.." name="search2">
        <img class="search-icon" src="<?php echo get_template_directory_uri(); ?>/images/search.svg" alt="Search">
    </div>
</form>

                <div class="icons">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/cart.svg" alt="Cart" /></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/like.svg" alt="Favorites" /></a>
                </div>
            </div>
        </div>
    </header>
    <script>
        function toggleMenu() {
            var menu = document.querySelector('.menu');
            menu.classList.toggle('show'); // Toggle the 'show' class on the menu
        }

        function toggleSearch() {
            var searchForm = document.querySelector('.search-form');
            searchForm.classList.toggle('show'); // Toggle the 'show' class on the search form
        }
    </script>
</body>
</html>
