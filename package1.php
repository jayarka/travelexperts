<!DOCTYPE html>
<html lang="en">
<head>
  <!-- connect every page that will work with this page such as: scc,php, js, bootstrap, fontawesome. -->
  <title>Package1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link rel="stylesheet"  href="caribbean.css">
  <script src="caribbean.js"></script>
  <?php include 'header.php';?>
  </head>


<body>
  <!-- create div for the containt of the page so you be able to costumes margin and so on -->
  <div class="page">
    <!-- this is the image that would introduce the page. 
    create a class for the image in order to costumes image. -->
    <img class="main" src="caribbean16.jpg"> 
    <!-- gourp the next containt together which would have small details about the package such as: rating, viewer count, and package detials. -->
      <div class="destination-info-box">
        <div class="info">
          <h2>Caribbean New Year</h2>
          <!-- this part is for the rating stars. i created class to costumes the stars, like coloring the stars  -->
          <p class="detail"><strong>All Inclusive</strong>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span> 
          </p>
          <!-- this is icon greet for displaying information easily- doesnot require viewer to read. 
          when you are using icons make sure the website that suports icons to be linked in to you page. -->
          <i class='far fa-clock'></i><span> 8 nights</span>
            <br>
            <br>
          <i class='far fa-calendar-alt'></i><span>Thur, April 11 - Wed,  April 19</span>
            <br>
            <br>
          <i class='fas fa-plane-arrival'></i><span>Toncontín International Airport</span>
          <br>
          <br>
          <i class='fas fa-ship'></i><span>Bahamas</span>
          <br>
          <br>
          <i class='fas fa-plane-departure'></i><span>Grand Bahama International Airport</span>
          <br>
          <br>
          <br>
          <form method="get" action="booking1.php">
          <button type="submit" name="1" class="button">Book</button>
           </form>
           <div class="counter">
            <i class="fa fa-eye"></i>
            <!-- this part is recording the amount the times package one uploads and writes the a record in to a file saved in the database -->
            <?php
            // Create a variable //
               $hits = file("counter1.txt");
               //Add one to the file //
               $hits[0] ++;
               //Open the file and write on file//
               $fp = fopen("counter1.txt", "w");
              // Fput writes the first part in the brackets//
               fputs($fp , "$hits[0]");
               //Close file// 
               fclose($fp);
               echo  $hits[0];
                ?>
            </div>
        </div>   
        
      </div>


      
<!-- this is tabnav that allows view to access diffent information on each tab view clicks. 
this is good if you wanted to include different contant that would be separated.
the tab uses javascript functions therefore i commented on the javascript page about the function use-->

    <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'photos')">PHOTOS</button>
      <button class="tablinks" onclick="openCity(event, 'DESCRIPTION')">DESCRIPTION</button>
      <button class="tablinks" onclick="openCity(event, 'ITINERARY DETAILS')">ITINERARY DETAILS</button>
    </div>

    <div id="photos" class="tabcontent" >
      
          <img src="caribbean2.jpg" alt="Caribbean" class="img">
          <img src="caribbean3.jpg" alt="caribbean" class="img">
          <img src="caribbean4.jpg" alt="Caribbean" class="img">
          <img src="caribbean13.jpg" alt="caribbean" class="img">
          <img src="caribbean5.jpg" alt="caribbean" class="img">
          <img src="caribbean6.jpg" alt="Caribbean" class="img">
          <img src="caribbean7.jpg" alt="caribbean" class="img">
          <img src="caribbean8.jpg" alt="Caribbean" class="img">
          <img src="caribbean14.jpg" alt="Caribbean" class="img">
          <img src="caribbean9.jpg" alt="caribbean" class="img">
          <img src="caribbean11.jpg" alt="caribbean" class="img">
          <img src="caribbean12.jpg" alt="Caribbean" class="img">
    </div>
    <div id="DESCRIPTION" class="tabcontent">
      <h3>TRIP HIGHLIGHTS</h3>
        <p>Visit stunning Puri Penulisan, a temple located at the highest altitude in Bali situated atop Mount Batur
              Relish a unique sunrise over the Indian Ocean on a morning cruise in search of playful dolphins
              Stroll along the vibrant paintings and crafts of the Ubud Art Market in the heart of the cultural city
              Witness the splendor of Bali’s countryside while traveling around the mountain forests, terraced rice paddy fields, and pristine beaches
              Wander along the rim of Mount Batur for views of the remarkable caldera, home to a shimmering reflective lake
              View the evolution of Bali’s artistic interpretations through time in the galleries of the Neka Art Museum
              Discover the wildlife around Ubud at the Sacred Monkey Forest and delight in a staggering view of soaring herons at Petulu
              Traverse the walkways of the Bali Orchid Garden to view the thriving exotic flower in various manicured settings
              Delight in the comforts and rejuvenating warmth of the natural hot springs near Lovina.</p> 
                <br>
                <h5>TRIP BREAKDOWN</h5>
                <p>
                  Architecture Tours / Arts & Crafts Tours / Historical Sites / History & Archaeology Tours / Museums & Galleries / Performances: Concerts - Theaters - Shows - Dances & Musicals / Cooking Classes / Gourmet Dining / Music / Small Towns / Villages / Walking Tours / Gardens / Hiking
                  THEMES  
                </p>
                <br>
                <h5>THEMES</h5>
                <p>
                  (Day 1): Sanur Beach – Arrive in Beauty and Relaxed Ambiance of Sanur Beach

                  (Day 2): Ubud – Transfer to Ubud and Explore the Cultural Center of Balinese Life

                  (Day 3): Ubud – Discover the Natural Beauty In and Around Charming Ubud

                  (Day 4): Lovina – Travel to Lovina with a Scenic Drive and the Day at Leisure

                  (Day 5): Lovina – Enjoy a Sunrise Dolphin Cruise and Visit Menjangan Island

                  (Day 6): Kintamani – Venture to Kintamani to Traverse the Summit of Mount Batur

                  (Days 7 – 8): Sanur Beach – Return to Sanur for the Shore, Hindu Temples, and Pavilions 
                </p>
                <br>
                <h5>DETAILED DESCRIPTION</h5>
                    <p>Bali vacations are famous for their vibrant beach culture filled with pristine waters and powdery sand. 
                      On your 8-day tour, you embrace the image of the coastline and step beyond the surface panorama to experience the historic culture, stunning artwork, remarkable temples, 
                      and breathtaking scenery stretching from the island’s southern tip to its northern point. 
                      The adventure begins with your arrival at Ngurah Rai International Airport. 
                      Your transfer meets you at baggage claim with a private transfer to Sanur. 
                      The remainder of the day is at your leisure to enjoy the comforts of your luxury resort, and to introduce yourself to the narrow streets of Old Town and the unique monasteries on the outskirts of the city.

                      </p>
                    <br>
                <h5>ACTIVITIES </h5>
                  <p>
                    Beach Vacations / Relaxation / Outdoor Adventures 
                  </p>
                  <br>
                  <h5>FEATURES </h5>
                    <p>
                      Leisure / Outdoors & Sports
                    </p>
          </div>
  <div id="ITINERARY DETAILS" class="tabcontent">
    
  <h5>PLACES VISITED</h5>
                  Sanur Beach, Ubud, Tanah Lot, Tanah Ayun, Lovina, Kintamani, Besakih, Semarapura 
                  <br>
                  <img src="caribbean15.jpg" alt="caribbean" class="img" style="center">
                  <br>
                  <br>
                  <h5>DEPARTURE DATES</h5> 
                  
                  Dates are flexible and customizable for private departures.
                  <br>
                  <br>
                  <h5>DETAILED ITINERARY</h5> 
                
                  <h5 class="Days">Day 1: Sanur Beach – Relaxing Introductions</h5>
                  <br>
                  The beauty of a vacation in Sanur derives from the charming pace of life seamlessly blending with quality restaurants, charming cafes, and the sliver of golden sand glinting on the beach against the sapphire waters of the Indian Ocean. The hillsides glow emerald and jade hues from the rustling palms, lush ferns, and productive rice fields. Your private transfer meets you at Ngurah Rai International Airport upon your arrival. The tiny lanes of Old Towns contain restaurants reminiscent of eating in a family home. The scent of turmeric and coconut milk emanates from the eateries. Locals and visitors stroll along the beachfront walk, the first ever built on the island, encompassing nearly three miles. Cafes contain fronts for unobstructed views of the water.
                  
                  The scent of Balinese coffee drifts from the tables. Colorful wooden fishing boats speckle the shoreline with locals working on repairs. Old villas grace the boardwalk with cows grazing on the grassland sprouting to the west. You reach your luxurious accommodation and settle into the unique combination of beauty, charm, and ambiance sweeping across town. A walkway leads up the mountainside over one mile before reaching the walls of the fortified Podostrog Monastery. The small church was erected in the 12th century, with the adjacent looming figure of the larger church built in the 18th century. An engraving above the doorway contains an image of the double-headed eagle holding a snake in its claws, which is the symbol of Montenegro.
                  <br>
                  <br>
                  <p class="included">What’s Included: airport transfer, accommodation</p>
                  <br>
                  <h5 class="days">Day 2: Ubud – View of Balinese Culture</h5>
                  <br>
                  In the morning, the sunlight rises over the eastern horizon spreading glinting light over the sapphire water. The blue hues layer the Indian Ocean, ranging from cobalt at its depths to crystalline indigo brushing against the shore. The gold sand stretches for nearly three miles with a rainbow reef breaking the waves into tranquil lapping water. At breakfast, the bright colors of tropical fruit decorate the dining room, from scarlet rambutan to the pink pulp of juicy grapefruit.
                  
                  Your private transfer meets you in the lobby after the meal and escorts you north to the cultural heart of Bali, the city of Ubud. The road takes you from the gilded coastline into the central uplands. The pink and white orchids blossom alongside blue poinsettias. Palm trees rustle in the gentle breeze. Ancient temples and royal palaces line the streets with verdant hills and rice terraces filling the outer landscape. Cafes and shops intermittently line the roadways with the aroma of chicken cooking over an open flame drifting up from the charcoal grills along the sidewalks.
                  
                  The Neka Art Museum is a diverse gallery exhibiting the evolution of Balinese painting styles, whether with local artists or internationally renowned Indonesian painters. You walk beneath the traditional wood arcade to enter the gallery, which was erected in the 1970s encircling a Balinese garden. The first exhibit depicts Balinese and Javanese myths and legends, with vibrant attention to detailing of the Ramayana and Mahabharata epic. The bursts of color add to the captivating works, with the latter story a narrative of the warring fractions between the Kaurava and Pandava princes. 
                  <br>
                  <br>
                  <p class="included">What’s Included: breakfast, transfer, tour, accommodation</p>
                  <br>
                  <h5 class="days">Day 3: Ubud – Compelling Life Around Ubud</h5>
                  <br>
                  At breakfast, you can’t help but recall the surreal experience of watching thousands of herons returning to the trees of Petulu. A small wooden house at the center of a rice field offers the perfect position to watch the wide wingspan and pristine feathers shimmering in the fading sunlight. At breakfast, you find subtle hints of caramel and chocolate aromas accompanying the aroma of freshly roasted Balinese coffee beans. Today you step outside of Ubud’s meandering streets first to visit the art market where local craftsmen showcase their paintings, woodcarvings, and jewelry. Venture to the old temple of Gunung Lebah, which was erected atop a jutting rock at the confluence of two rivers.
                  
                  The majestic setting derives from the bright colors of the landscape, accentuated by the sound of rushing waters echoing around the multi-tiered shrine. Butterflies flutter along the dangling leaves draping over the temple’s borders. Antique statues of traditional warrior-spirits flank the stairwell and protect the entrance from demons. Locals believe the temple was erected over a concentration of powerful earthly energies. A short distance outside of central Ubud takes you to the Sacred Monkey Forest. The natural sanctuary houses hundreds of gray long-tailed macaques. The community-based program protects the trees and monkeys. The macaques swing from tree to tree along the forest canopy. Bananas dangle from the branches. The nutmeg forest provides a sweet aroma and refreshing shade. Moss grows on the tree trunks and antique statues peppering the area. You feel as though you have stepped into an archeological dig uncovering a jungle-clad temple at Dalem Agung.
                  <br>
                  <br>
                  <p class="included">What’s Included: breakfast, tour, accommodation</p>
                  <br>
                  <h5 class="days">Day 4: Lovina – Serene Scenery of Bali</h5>
                  <br>
                  At breakfast, the scent of French plantains and coconut milk fills the dining room. Thin pancakes, similar to crepes, are made with the sweet tropical flavor of coconut milk batter, containing layers of banana amidst the flaky texture. After breakfast, your private transfer escorts you northbound through the hills and mountains, weaving through the terraced rice fields. A thin layer of morning mist spreads over the valley floor below before dissipating beneath the warm sun. Palm trees mix with flowering frangipanis.
                  
                  You reach the tranquil setting of Lovina, located on Bali’s northern shores. The beach stretches for eight miles, dotted with various small villages and black volcanic sand. Calm waves splash against the shoreline. The sunlight washes over the golden coast and towering palms. Traditional proas, outrigger canoes, venture out onto the water with fishermen eager to cast their nets in the night’s cool air. In the evening, the drifting lights from the boats reflect on the water and speckle the distance like low-lying starlight. For a relaxing excursion, you venture to Air Banjar Hot Springs.
                  
                  Steam rises from the water’s surface, adding moisture to the bordering stones. Water streams from the carved mouths of elegant statues pertaining to Balinese mythology. The garden setting provides a serene ambiance. You dip your toes into the water first and feel the heat wrapping around your skin. The welcoming temperature fluctuates between 110 and 120 degrees Fahrenheit, heated naturally by the region’s volcanic activity. You sink into the relaxing ambiance, allowing the splendor of the garden, the rejuvenating warmth, and the wonder of Bali to sink in.  
                  <br>
                  <br>
                  <p class="included">What’s Included: breakfast, transfer, tour, accommodation</p>
                  <br>
                  <h5 class="days">Day 5: Lovina – Wonder Before Sunrise</h5>
                  <br>
                  Before the sun has had a chance to rise, you venture to the marina to step aboard a sightseeing boat bound for the Indian Ocean. The boat weighs anchor amidst the returning canoes. Fishermen drag their vessels onto the sand before hauling their brimming nets over their shoulders as they head to market. The sweet aroma of the ocean sweeps through the air with the breeze carrying sea spray. The boat cuts through the gentle current. The open sea provides the perfect way to watch the sun rising over the eastern horizon. The glowing light layers the distant sky with purple and pink hues spreading reflecting in the calm ocean.
                  
                  The water ripples near your boat. The soft orange glow in the distance spreads across the water, guiding your eye to a fin breaching the surface. Exhilaration courses through your body due to the thrilling feeling of seeing dolphins in the wild. After seeing your first fin, the dolphins suddenly rise out of the water in unfathomable numbers. They pop up, arching their bodies, before diving back beneath the surface. The dolphin pods disappear. The sunrise has faded to refreshing morning light. You return to shore to enjoy a fabulous breakfast of banana pancakes and freshly blended mango shakes.
                  <br>
                  <br>
                  <p class="included">What’s Included: breakfast, tour, accommodation,</p>
                  <br>
                  <h5 class="days">Day 6: Kintamani – Mirror Image</h5>
                  <br>
                  In the morning, the scent of cherimoya fills the air. Consider adding some coconut milk into your aromatic coffee made from roasted Balinese beans. Your private transfer meets you at the hotel and leads you away from the quiet streets of Lovina. The seaside fades behind the emerald canopy. You venture into the extensive display of lush rice fields texturing the hillside. Locals on motorbikes pass by you on the road. The mountain road winds upwards to the rim of Mount Batur, highlighting typical Balinese villages rising along the roadside. Temples with multi-tiered spires imitate the soaring trees. Clove plantations fill the air with a vibrant spice. Your driver points to a steep ridgeline atop which stone villages peek through.
                  
                  Pine forest overtakes the scenery before you reach Penulisan, home to Puri Penulisan, the highest temple complex on the island, located at an altitude of more than 5,700 feet above sea level. The structure was erected in the 9th century with 11 terraces creating a pyramid-like design. You reach the charming town of Kintamani to view the vibrant stone statues of the eponymous temple. The town is located on the caldera rim overlooking the reflective waters of Lake Batur. The calm, cobalt lake laps at the fertile and verdant shores, providing a lush mirror image of the forest, along with the stunning surroundings of the Mount Batur Range.
                  <br>
                  <br>
                  <p class="included">What’s Included: breakfast, transfer, tour, accommodation</p>
                  <br>
                  <h5 class="days">Days 7 - 8: Sanur Beach – The Calm of Bali</h5>
                  <br>
                  In the morning, the fruit orchards glow with a rainbow of colors against the pine trees and cobalt waters around the lake. The largest market in Kintamani fills the air with the scent of oranges amidst the stunning variety of fish caught fresh that morning in the lake. You can see the secondary rim of the crater rising above the lake at a height of 2,300 feet. After breakfast, your private transfer meets you at the hotel and escorts you south, returning along the scenic roads to Sanur.
                  
                  The road has a shallow grade down the mountains, offering a view of the tall emerald grasses near the river gorge. A small bridge takes you to the opposite banks. You bask in the iconic image of Bali, with layers of rice paddy fields in the foreground framed by towering trees guiding your eyes to the rolling mountains in the background. You reach Sanur and settle easily into the comforts of your resort. The remainder of the day is at your leisure to indulge in the white sand beaches or linger in the refreshing pool at your accommodation.
                  
                  The Orchid Garden just outside of Sanur contains a variety of settings in which the elusive flower thrives. Thousands of orchids blossom in the warm weather, flourishing in the rich minerals of the volcanic soil. The flowers resemble bushes blossoming along the walkway. Red petals dangle from the lush foliage. You step off the path and onto the soft grass to embrace the sweet and herbaceous fragrance of a white orchid bobbing in the breeze.
                  
                  The wonders of Bali emanate from the landscape and history, culture and cuisine. In the following morning, you find distinctive tropical fruit the likes of which you haven’t seen throughout your trip. Dragon fruit and mangosteen, jackfruit and guava decorate the dining room. The lingering sweetness of orange coconut overtakes the air. On the beach, local fishermen drag their canoes beneath the shade to replace the wooden fixtures or repaint the borders. The charm of the coastline offers a pristine panorama, and the memories of the mountains provide a reminder of the island’s enchanting landscape. Your private transfer meets you at the hotel after breakfast and leads you to Ngurah Rai International Airport for your flight home.
                  <br>
                  <br>
                  <p class="included">What’s Included: breakfast, transfer, accommodation</p></p>
            </div>

  </div>

  </div>
    
</body>
</html> 