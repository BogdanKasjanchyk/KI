<!DOCTYPE html>
<html lang="en">
<?php require '../head.php'; ?>
<link rel="stylesheet" href="..\css\subpages.css">
<title>Accessebility</title>
<body>
        <header>
            <div class="header">
            <div class="header__wrapper">
                <div class="header__top_section">
                    <?php require '../top__section_icon_container.php'; ?>
                    <div class="top__section">
                        <div class="logo">
                            <h1 class="main_title">Accessebility</h1> 
                        </div>
                    </div>
                    <div class="top__section_language_profile">
                        <div class="lang">
                            <div class="lang__container">
                                <p class="lang-switcher eng">
                                    <a href="..\eng\accessibility.php" tabindex="0">eng</a>
                                </p>
                                <p class="lang-switcher ua" tabindex="0">
                                    <a href="..\ua\accessibility.php">ua</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="header__ul_searh sub_back">
                    <div class="ul__search_container">
                        <div class="ul_container">
                            <ul>
                                <li><a href="../eng/index.php" class="back"><img src="../img/icons/arrow.svg" alt="" class="icon">Back</a></li>
                        </div>
                    </div>
                </div>
        </header>
        <main>
            <div class="main__wrapper">
                <div class="side__info">
                    <div class="block"> 
                        <h2>ACCESSIBILITY</h2>
                        <p>We want as many people as possible to be able to use this website. For example, that means you should be able to:</p>
                        <ul>
                            <li>change colours, contrast levels and fonts</li>
                            <li>zoom in up to 200% without the text spilling off the screen</li>
                            <li>navigate most of the website using just a keyboard</li>
                            <li>navigate most of the website using speech recognition software</li>
                            <li>listen to most of the website using a screen reader (including the most recent versions of JAWS, NVDA and VoiceOver)</li>
                        </ul>
                    </div>
                    <div class="block">
                        <h2>HOW ACCESSIBLE THIS WEBSITE IS</h2>
                        <p>We know some parts of this website are not fully accessible:</p>
                        <ul>
                        <li>change colours, contrast levels and fonts</li>
                            <li>Some image alt text is missing or incorrect</li>
                            <li>Most PDF documents are not fully accessible to screen reader software</li>
                            <li>You cannot pause the autoplay video on mobile devices</li>
                            <li>Captions are missing from some videos</li>
                        </ul>
                    </div>
                    <div class="block">
                        <h2>TECHNICAL INFORMATION ABOUT THIS WEBSITE’S ACCESSIBILITY</h2>
                        <p>The British Army is committed to making its websites accessible, in accordance with the Public Sector Bodies (Websites and Mobile Applications) (No. 2) Accessibility Regulations 2018.</p>
                    </div>
                    <div class="block">
                        <h2>CONTENT THAT’S NOT WITHIN THE SCOPE OF THE ACCESSIBILITY REGULATIONS</h2>
                        <h3>PDFS AND OTHER DOCUMENTS</h3>
                        <p>Some of our PDFs and Word documents are essential to providing our services. For example, we have PDFs with information on how users can access our services, and forms published as Word documents. We are currently working to a programme which either fixes these or replaces them with accessible HTML pages.</p>
                        <p>The accessibility regulations do not require us to fix PDFs or other documents published before 23 September 2018 if they’re not essential to providing our services. For example, we do not plan to fix the Centre for Army Leadership Insight No.1.</p>
                    </div>
                </div>
            </div>
        </main>
        <?php require 'footer.php';?>
</body>
</html>