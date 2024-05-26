<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Identify-Species - EcoDiscover</title>
    <link rel="shortcut icon" href="public/picture1-200w.png" type="image/x-icon">
    <meta property="og:title" content="Identify-Species - EcoDiscover" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Titillium Web;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-scheme-green100);
        background-color: var(--dl-color-scheme-yellow20);

        fill: var(--dl-color-scheme-green100);
      }
    </style>
    <link
      rel="stylesheet"
      href="https://unpkg.com/animate.css@4.1.1/animate.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css"
    />
    <!--This is the head section-->
    <!-- <script type="text/javascript"> ... </script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ol@v8.2.0/ol.css">
  </head>
  <body>
    <link rel="stylesheet" href="./styl.css" />
    <div>
      <link href="./identify-specie.css" rel="stylesheet" />

      <div class="identify-species-container">
        <div class="identify-species-navbar navbar-container">
          <div class="max-width">
            <header
              data-thq="thq-navbar"
              class="identify-species-navbar-interactive"
            >
              <div class="identify-species-logo">
                <img
                  alt="image"
                  src="public/picture1-200w.png"
                  class="identify-species-image"
                />
                <span class="identify-species-text">
                  <span class="identify-species-text01">Eco</span>
                  <span class="brandName">Discover</span>
                </span>
              </div>
              <div
                data-thq="thq-navbar-nav"
                class="identify-species-desktop-menu"
              >
                <div class="identify-species-links">
                  <span class="identify-species-text03 navbarLink">
                    <a href="index.php">Home</a>
                  </span>
                  <span class="identify-species-text04 navbarLink">
                    <a href="#">Identify Species</a>
                  </span>
                  <span class="identify-species-text05 navbarLink">
                    <a href="resources.php">Resources</a>
                  </span>
                  <span class="identify-species-text06 navbarLink">
                    <a href="login.html">Community</a>
                  </span>
                  <button class="button-secondary button"><a href="login.html">Log in</a></button>
                  <button class="button button-primary"><a href="register.html">Register</a></button>
                </div>
              </div>
              <div
                data-thq="thq-burger-menu"
                class="identify-species-burger-menu"
              >
                <svg viewBox="0 0 1024 1024" class="identify-species-icon">
                  <path
                    d="M128 554.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 298.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667zM128 810.667h768c23.552 0 42.667-19.115 42.667-42.667s-19.115-42.667-42.667-42.667h-768c-23.552 0-42.667 19.115-42.667 42.667s19.115 42.667 42.667 42.667z"
                  ></path>
                </svg>
              </div>
              <div
                data-thq="thq-mobile-menu"
                class="identify-species-mobile-menu"
              >
                <div class="identify-species-nav">
                  <div class="identify-species-top">
                    <div class="identify-species-logo1">
                      <img
                        alt="image"
                        src="public/group%202.svg"
                        class="identify-species-image1"
                      />
                      <span class="brandName">
                        <span class="identify-species-text01">Eco</span>
                  <span class="brandName">Discover</span>
                      </span>
                    </div>
                    <div
                      data-thq="thq-close-menu"
                      class="identify-species-close-menu"
                    >
                      <svg
                        viewBox="0 0 1024 1024"
                        class="identify-species-icon02"
                      >
                        <path
                          d="M810 274l-238 238 238 238-60 60-238-238-238 238-60-60 238-238-238-238 60-60 238 238 238-238z"
                        ></path>
                      </svg>
                    </div>
                  </div>
                  <nav class="identify-species-links1">
                    <span class="identify-species-text10 navbarLink">
                      <a href="index.php">Home</a>
                    </span>
                    <span class="identify-species-text11 navbarLink">
                      <a href="#">Identify Species</a>
                    </span>
                    <span class="identify-species-text12 navbarLink">
                      <a href="resources.php">Resources</a>
                    </span>
                    <span class="identify-species-text13 navbarLink">
                      <a href="login.html">Community</a>
                    </span>
                  </nav>
                  <div class="identify-species-buttons">
                    <button class="button-secondary button"><a href="login.html">Log in</a></button>
                    <button class="button button-primary"><a href="register.html">Get started</a></button>
                  </div>
                </div>
                <div>
                  <svg
                    viewBox="0 0 950.8571428571428 1024"
                    class="identify-species-icon04"
                  >
                    <path
                      d="M925.714 233.143c-25.143 36.571-56.571 69.143-92.571 95.429 0.571 8 0.571 16 0.571 24 0 244-185.714 525.143-525.143 525.143-104.571 0-201.714-30.286-283.429-82.857 14.857 1.714 29.143 2.286 44.571 2.286 86.286 0 165.714-29.143 229.143-78.857-81.143-1.714-149.143-54.857-172.571-128 11.429 1.714 22.857 2.857 34.857 2.857 16.571 0 33.143-2.286 48.571-6.286-84.571-17.143-148-91.429-148-181.143v-2.286c24.571 13.714 53.143 22.286 83.429 23.429-49.714-33.143-82.286-89.714-82.286-153.714 0-34.286 9.143-65.714 25.143-93.143 90.857 112 227.429 185.143 380.571 193.143-2.857-13.714-4.571-28-4.571-42.286 0-101.714 82.286-184.571 184.571-184.571 53.143 0 101.143 22.286 134.857 58.286 41.714-8 81.714-23.429 117.143-44.571-13.714 42.857-42.857 78.857-81.143 101.714 37.143-4 73.143-14.286 106.286-28.571z"
                    ></path></svg
                  ><svg
                    viewBox="0 0 877.7142857142857 1024"
                    class="identify-species-icon06"
                  >
                    <path
                      d="M585.143 512c0-80.571-65.714-146.286-146.286-146.286s-146.286 65.714-146.286 146.286 65.714 146.286 146.286 146.286 146.286-65.714 146.286-146.286zM664 512c0 124.571-100.571 225.143-225.143 225.143s-225.143-100.571-225.143-225.143 100.571-225.143 225.143-225.143 225.143 100.571 225.143 225.143zM725.714 277.714c0 29.143-23.429 52.571-52.571 52.571s-52.571-23.429-52.571-52.571 23.429-52.571 52.571-52.571 52.571 23.429 52.571 52.571zM438.857 152c-64 0-201.143-5.143-258.857 17.714-20 8-34.857 17.714-50.286 33.143s-25.143 30.286-33.143 50.286c-22.857 57.714-17.714 194.857-17.714 258.857s-5.143 201.143 17.714 258.857c8 20 17.714 34.857 33.143 50.286s30.286 25.143 50.286 33.143c57.714 22.857 194.857 17.714 258.857 17.714s201.143 5.143 258.857-17.714c20-8 34.857-17.714 50.286-33.143s25.143-30.286 33.143-50.286c22.857-57.714 17.714-194.857 17.714-258.857s5.143-201.143-17.714-258.857c-8-20-17.714-34.857-33.143-50.286s-30.286-25.143-50.286-33.143c-57.714-22.857-194.857-17.714-258.857-17.714zM877.714 512c0 60.571 0.571 120.571-2.857 181.143-3.429 70.286-19.429 132.571-70.857 184s-113.714 67.429-184 70.857c-60.571 3.429-120.571 2.857-181.143 2.857s-120.571 0.571-181.143-2.857c-70.286-3.429-132.571-19.429-184-70.857s-67.429-113.714-70.857-184c-3.429-60.571-2.857-120.571-2.857-181.143s-0.571-120.571 2.857-181.143c3.429-70.286 19.429-132.571 70.857-184s113.714-67.429 184-70.857c60.571-3.429 120.571-2.857 181.143-2.857s120.571-0.571 181.143 2.857c70.286 3.429 132.571 19.429 184 70.857s67.429 113.714 70.857 184c3.429 60.571 2.857 120.571 2.857 181.143z"
                    ></path></svg
                  ><svg
                    viewBox="0 0 602.2582857142856 1024"
                    class="identify-species-icon08"
                  >
                    <path
                      d="M548 6.857v150.857h-89.714c-70.286 0-83.429 33.714-83.429 82.286v108h167.429l-22.286 169.143h-145.143v433.714h-174.857v-433.714h-145.714v-169.143h145.714v-124.571c0-144.571 88.571-223.429 217.714-223.429 61.714 0 114.857 4.571 130.286 6.857z"
                    ></path>
                  </svg>
                </div>
              </div>
            </header>
          </div>
        </div>
        <div class="identify-species-hero hero-container section-container">
          <div class="identify-species-max-width1 max-width">
            <div class="identify-species-content">
              <span class="identify-species-subtitle">
                <span class="identify-species-text15 beforeHeading">Eco-</span>
                <span class="identify-species-text16">Discover</span>
              </span>
              <h1 class="identify-species-title">
                Identify, Explore, Protect.
              </h1>
              <div class="identify-species-container1">
                <button class="button button-gradient"><a href="register.html">Get started</a></button>
              </div>
            </div>
            <div class="identify-species-image2">
              <img
                alt="image"
                src="public/union-400h.png"
                class="identify-species-graphic-top"
              />
              <img
                alt="image"
                src="public/group%2018-1200w.png"
                class="identify-species-image3"
              />
            </div>
          </div>
        </div>
        <main>
          <h1>Upload Image</h1>
          <form id="uploadForm" enctype="multipart/form-data">
              <label for="imageUpload">Upload an image of a plant or animal:</label>
              <input type="file" id="imageUpload" name="image" accept="image/*" required>
              <button type="submit" class="button">Upload</button>
          </form>
          <div id="result"></div>
          <div id="map" class="map"></div>
      </main>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/ol@v8.2.0/dist/ol.js"></script>
    <script src="app.js"></script>
    <script defer="">
      window.onload = () => {
        const runAllScripts = () => {
          initializeAllAccordions()
        }

        const listenForUrlChanges = () => {
          let url = location.href
          document.body.addEventListener(
            'click',
            () => {
              requestAnimationFrame(() => {
                if (url !== location.href) {
                  runAllScripts()
                  url = location.href
                }
              })
            },
            true
          )
        }

        const initializeAllAccordions = () => {
          const allAccordions = document.querySelectorAll('[data-role="Accordion"]');

          allAccordions.forEach((accordion) => {
            const accordionHeader = accordion.querySelector('[data-type="accordion-header"]')
            const accordionContent = accordion.querySelector('[data-type="accordion-content"]')

            accordionHeader.addEventListener('click', () => {
              if (accordionContent.style.maxHeight) {
                accordionContent.style.maxHeight = ''
              } else {
                accordionContent.style.maxHeight = `${accordionContent.scrollHeight}px`
              }
            })
          })
        }

        listenForUrlChanges()
        runAllScripts()
      }
    </script>
    <script
      defer=""
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>
  </body>
</html>
