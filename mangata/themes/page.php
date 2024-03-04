<?php get_header(); ?>
<style>
@import url('https://fonts.cdnfonts.com/css/great-vibes');
@import url('https://fonts.cdnfonts.com/css/inria-sans');
h1.wp-block-heading {
    font-family: 'Great Vibes', sans-serif;
    font-size: 3rem;
    text-align: center;
}
.video-container {
    width: 100%; 
    height: 650px; 
    margin: 0 auto; 
    position: relative; 
    overflow: hidden; 
    margin-bottom: 1.5rem;
}

.video-container iframe {
    width: 100%; /* Occupy full width of container */
    height: 100%; /* Occupy full height of container */
    position: absolute; 
    top: 0; /* Position iframe at top */
    left: 0;
    border: none; /* Remove border */
}
h4.wp-block-heading {
  color: #E19E9E;
  font-size: 1.5rem; 
  line-height: 30px;
        font-weight: 600;
}

.image-container {
     margin: -100px auto 0 auto;
    position: relative; /* Positioning context for absolute positioning */
    width: 100%; /* Full width */
    max-width: 1000px; /* Max width for better responsiveness */
}

.image-container img {
    width: 100%; /* Occupy full width of container */
    height: auto; /* Maintain aspect ratio */
    display: block; /* Make sure image is block-level */
}
.wp-block-pullquote.pink {
  background-color: #FFFFFF;
  padding: 20px;
  width: 65%;
  border-radius: 15px;
  font-family: 'Inria Serif', serif;
  margin: 0 auto;
  box-shadow: 0 0 80px rgba(242, 169, 188, 0.9); 
}

.wp-block-pullquote blockquote {
  margin: 0;
  font-style: italic; 
}
h2.wp-block-heading {
  text-transform: uppercase;
  font-size: 2rem; 
  font-weight: 600; 
  margin: 20px 0;
}
.extra-info p {
  font-family: 'Inria Sans', sans-serif;
  font-size: 1.3rem;
  line-height: 2;
}
.extra-info .unordered-list {
    font-family: 'Inria Sans', sans-serif;
    list-style-type: disc; 
      padding-left: 1rem;
      line-height: 30px;
}
.extra-info .unordered-list li {
    list-style-type: disc; 
      font-size: 1.25rem;
      padding-left: 1rem;
margin: 12px 0;
}
.content {
    width: 75%;
    margin: 0 auto;
}
h3.wp-block-heading {
  color: #888;
  text-transform: uppercase;
  font-size: 1.5rem; 
  font-weight: 600; 
  margin: 20px 0;
}
.extra-info {
  display: flex;
  flex-wrap: wrap;
}

.extra-content {
  flex: 0 0 calc(50% - 20px); /* Adjust width and spacing */
  margin-right: 20px; /* Add space between content and image */
}

.wp-block-image {
  flex: 0 0 calc(50% - 20px); /* Adjust width and spacing */
  margin-left: 20px; /* Add space between content and image */
}

@media (max-width: 768px) {
  .extra-content,
  .wp-block-image {
    flex: 1 1 100%; /* Set to full width on smaller screens */
    margin: 0; /* Reset margin */
  }
}
h5.wp-block-heading {
    font-family: Inria Sans', sans-serif;
      text-transform: uppercase;
      font-size: 1.3rem;;
      font-weight: 600;
  
} 
.extra-info .ordered-list {
    font-family: 'Inria Sans', sans-serif;
    list-style-type: disc; 
      padding-left: 1rem;
      line-height: 30px;
}
.extra-info .ordered-list li {
        display: list-item;
list-style: decimal;
      font-size: 1.25rem;
      padding-left: 1rem;
margin: 12px 0;
}
.extra-info p {
    margin-right: 20px;
}
 table {
        width: 100%;
        font-size: 1.25rem;
        border-collapse: collapse;
        margin-bottom: 30px; /* Add some space below the table */
    }

    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd; 
    }

    tr:nth-child(even) {
        background-color: pink; /* Add alternating row background color */
    }


    td:first-child {
        width: 30%; /* Set width for the first column */
    }

    @media (max-width: 768px) {
        td, th {
            font-size: 14px; /* Reduce font size for smaller screens */
        }
    }
    h6.wp-block-heading {
    font-weight: 600;
    font-size: 1.3rem;
}
</style>
<div class="body-container">
       <!-- Video embed -->
        <div class="video-container">
            <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F1680770725755304%2F&show_text=false&width=317&t=0" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
        </div>
    <h1 class="wp-block-heading">
        <?php echo get_the_title(); ?>
    </h1>
    <div class="content">
         <div class="image-container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/letter.png" alt="Image">
            </div>
            <br>
 <div class="extra-info">
  <div class="extra-content">
    <h2 class="wp-block-heading">Heading 2</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <h3 class="wp-block-heading">Heading 3</h3>
    <ul class="unordered-list">
      <li>Unordered list item 1</li>
      <li>Unordered list item 2</li>
      <li>Unordered list item 3</li>
      <li>Unordered list item 4</li>
      <li>Unordered list item 5</li>
    </ul>
    </div>
<figure class="wp-block-image">
    <img src="https://rosiestrose.com/idm250/wp-content/themes/portfolio-2023/images/bunny.png" alt="Size guide"> 
        <figcaption>IMAGE WITH CAPTION</figcaption>
    </figure>
</div>
<br>
<br>
    <figure class="wp-block-pullquote pink"><blockquote><p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore magna aliqua."</p></blockquote></figure>
    <br>
    <br>
<br>
 <div class="extra-info">
     <figure class="wp-block-image">
  <img src="https://rosiestrose.com/idm250/wp-content/themes/portfolio-2023/images/mangata.png" alt="Size guide" style="width: 90%;"> 
        <figcaption>IMAGE WITH CAPTION</figcaption>
     <h5 class="wp-block-heading">
        HEADING 5 </h5>
    <p>Lorem ipsum dolor sit amet, consectetur adip. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<ol class="ordered-list">
    <li>Ordered list item 1</li>
    <li>Ordered list item 2</li>
    <li>Ordered list item 3</li>
    <li>Ordered list item 4</li>
    <li>Ordered list item 5</li>
</ol>
     <h6 class="wp-block-heading">
        HEADING 6 (Table) </h6>
  <table>
    <tbody>
        <tr>
            <td>Brand Name:</td>
            <td>Mangata</td>
        </tr>
        <tr>
            <td>Founder:</td>
            <td>Founder's Name</td>
        </tr>
        <tr>
            <td>Established:</td>
            <td>Year Founded</td>
        </tr>
        <tr>
            <td>Headquarters:</td>
            <td>Location</td>
        </tr>
          </tbody>
</table>
    </figure>
      <br>
  
  <div class="extra-content">
    <h4 class="wp-block-heading">
        HEADING 4 </h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
     <figure class="wp-block-image">
  <img src="https://rosiestrose.com/idm250/wp-content/themes/portfolio-2023/images/ad.jpg" alt="Size guide" style="width: 90%;"> 
        <figcaption>IMAGE WITH CAPTION</figcaption>
    </div>

</div>
    </div> 
</div> 

<?php
    echo get_the_content();
?>
<?php get_footer(); ?>
