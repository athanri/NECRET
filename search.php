<!doctype html>
<html lang="en">
    <head>
        <?php include 'includes/head.php'; ?>
    </head>

    <body>
        <?php include 'includes/navbar.php'; ?>
        
        <div id="meetTeam" class="container-fluid">
            <div class="container">
                <div class="row pt-2">
                        <?php
                            // search.php

                            $query = isset($_GET['q']) ? trim($_GET['q']) : '';

                            if ($query === '') {
                                echo "<h2>Please enter a search term.</h2>";
                                exit;
                            }

                            // Automatically get all PHP files in the root
                            $allFiles = glob('*.php');

                            // Exclude non-content files
                            $exclude = ['head.php', 'bodyScripts.php', 'search.php', 'eqModal.php', 'iconBar.php', 'banners.php', 'connect.php', 'navbar.php', 'sliders.php', 'cardsPlain.php', 'contactForm.php'];
                            $files = array_filter($allFiles, function($f) use ($exclude) {
                                return !in_array($f, $exclude);
                            });

                            // Map filenames to friendly titles
                            $pageTitles = [
                                'index.php' => 'Home',
                                'meet.php' => 'Meet Our Team',
                                'legacy.php' =>  'Leaving a Legacy',
                                'volunteer.php' => 'Volunteer for NECRET',
                                'stories.php' => 'Personal Stories',
                                'awareness.php' => 'Awareness',
                                'awareness-symptoms.php' => 'Awareness Symptoms',
                                'donate.php' => 'Donate to NECRET',
                                'cancerResearcher.php' => 'Cancer Researcher (Sponsor)',
                                'cancerSupport.php' => 'Cancer Support',
                                'governance.php' => 'Governance',
                                'news.php' => 'News',
                                'events.php' => 'Hold an Event',
                                'favours.php' => 'Wedding Favours',
                                'vision.php' => 'Our Vision and Impact',
                                'ambassadors.php' => 'Ambassadors',
                                'index.php' => 'Home',
                                'boc.php' => 'Blankets of Care',
                                'dipintheNip.php' => 'Dip in the Nip',
                                'chy3-form.php' => 'Tax Relief Form',
                                'crfwalk.php' => 'Celine Reilly Flynn Walk',
                                'contact.php' => 'Contact Us',
                                'cuttingedge.php' => 'Cutting Edge',
                                'dubmarathon.php' => 'Dublin Marathon',
                                'fundraise.php' => 'Fundraising Ideas',
                                'getinvolved.php' => 'Geting Involved',
                                'kilmoon.php' => 'Kilmoon Barn Dance',
                                'lungcanceradvancement.php' => 'Lung Cancer Advancement',
                                'necretTLC.php' => 'NECRET TLC',
                                'nominate.php' => 'Nominate for charity of the year',
                                'openday.php' => 'Schools Open Day',
                                'prevention.php' => 'Prevention',
                                'privacy.php' => 'Privacy Policy',
                                'wmenmini.php' => 'Womens Mini Marathon',
                                'tullyallen.php' => 'Tullyallen Tractor Run',
                                'tips-breathing.php' => 'Breathing Tips',
                                'tips-chemotherapy.php' => 'Chemotherapy Tips',
                                'tips-chemobrain.php' => 'Chemobrain Tips',
                                'tips-dehydration.php' => 'Dehydration Tips',
                                'tips-insomnia.php' => 'Insomnia Tips',
                                'tips-nutrition.php' => 'Nutrition Tips',
                                'tips.php' => 'Tips for Living with Cancer',
                                'trials.php' => 'Trials',
                                'foother.php' => 'Footer',
                                'event.php' => 'Hold an Event',
                                // Add more pages here
                            ];

                            $results = [];
                            $queryLower = strtolower($query);

                            foreach ($files as $file) {
                                if (!file_exists($file)) continue;

                                $content = file_get_contents($file);
                                $text = strtolower(strip_tags($content));

                                if (strpos($text, $queryLower) !== false) {
                                    $pos = strpos($text, $queryLower);
                                    $snippet = substr($text, max(0, $pos - 50), 150);
                                    $snippet = htmlspecialchars($snippet);

                                    // Highlight matched word (case-insensitive)
                                    $pattern = '/' . preg_quote($query, '/') . '/i';
                                    $snippetDisplay = preg_replace($pattern, '<mark>$0</mark>', $snippet);

                                    $results[] = [
                                        'file' => $file,
                                        'title' => isset($pageTitles[$file]) ? $pageTitles[$file] : $file,
                                        'snippet' => "...{$snippetDisplay}..."
                                    ];
                                }
                            }

                            // Display results
                            echo "<div class='col-md-12 mt-2'><h2>Search results for: <em>" . htmlspecialchars($query) . "</em></h2></div>";

                            if (count($results) > 0) {
                                echo "<div class='col-md-12 col-12 col-lg-12 col-xl-12 col-sm-12 mt-3 pt-2 mb-5'><ul class='searchUL'>";
                                foreach ($results as $r) {
                                    echo "<li class='searchLI'><a href='{$r['file']}'><strong>{$r['title']}</strong></a>";
                                    echo "<small>{$r['snippet']}</small></li>";
                                }
                                echo "</ul></div>";
                            } else {
                                echo "<div class='col-md-12 col-12 col-lg-12 col-xl-12 col-sm-12 mt-3 pt-2 mb-5'><p>No results found.</p></div";
                            };
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'includes/iconBar.php'; ?>

        <?php include 'includes/footer.php'; ?>

        <?php include 'includes/bodyScripts.php'; ?>
    </body>
</html>