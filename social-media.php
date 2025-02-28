<?php
// Mock kết nối database
// $host = 'localhost';
// $dbname = 'social_media';
// $username =
// 'root'; $password = '';
// $dsn = "mysql:host=$host;dbname=$dbname";
// $pdo = new PDO($dsn, $username, $password);
// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// // Lấy dữ liệu từ database
// $sql = "SELECT * FROM social_media";
// $stmt = $pdo->query($sql);
// $socialMedia = $stmt->fetchAll(PDO::FETCH_ASSOC);
// // Hiển thị dữ liệu
// foreach ($socialMedia as $item) {
//     echo $item['name'] . '<br>';
// }
include 'data_mock.php';
$dataDetail = null;
$data_term_show = [];

function filterTermsByLetter($data, $letter)
{
    return array_filter($data, function ($item) use ($letter) {
        return strtoupper($letter) === strtoupper(substr($item["term"], 0, 1));
    });
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giao diện</title>
    <link rel="stylesheet" href="./social-media.css" />
</head>

<body>
    <div class="header">
        <div class="h">Dictionary of Social Media Terms</div>
        <div class="description">Unlock key terms and concepts with our interactive glossary.</div>
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search for a term...">
            <span class="search-icon">🔍</span>
        </div>
        <img src="./div.svg" class="img_social" />

    </div>

    
    <div class="container">
        <div class="sidebar">
            <h2>Browse by Letter</h2>
            <div class="browse-letter">
                <a class="selected_alphabet" onclick="selectLetter('A')">A</a>
                <a onclick="selectLetter('B')">B</a>
                <a onclick="selectLetter('C')">C</a>
                <a onclick="selectLetter('D')">D</a>
                <a onclick="selectLetter('E')">E</a>
                <a onclick="selectLetter('F')">F</a>
                <a onclick="selectLetter('G')">G</a>
                <a onclick="selectLetter('H')">H</a>
                <a onclick="selectLetter('I')">I</a>
                <a onclick="selectLetter('J')">J</a>
                <a onclick="selectLetter('K')">K</a>
                <a onclick="selectLetter('L')">L</a>
                <a onclick="selectLetter('M')">M</a>
                <a onclick="selectLetter('N')">N</a>
                <a onclick="selectLetter('O')">O</a>
                <a onclick="selectLetter('P')">P</a>
                <a onclick="selectLetter('Q')">Q</a>
                <a onclick="selectLetter('R')">R</a>
                <a onclick="selectLetter('S')">S</a>
                <a onclick="selectLetter('T')">T</a>
                <a onclick="selectLetter('U')">U</a>
                <a onclick="selectLetter('V')">V</a>
                <a onclick="selectLetter('W')">W</a>
                <a onclick="selectLetter('X')">X</a>
                <a onclick="selectLetter('Y')">Y</a>
                <a onclick="selectLetter('Z')">Z</a>
            </div>

            <h2>Categories</h2>

            <label class="checkbox-label">
                <input type="checkbox" onchange="filterByLabel('Social')">
                <div class="checkbox-content">
                    <div>Social</div>
                    <div class="checkbox-count">(27)</div>
                </div>
            </label>
            <label class="checkbox-label">
                <input type="checkbox" onchange="filterByLabel('Analytics')">
                <div class="checkbox-content">
                    <div>Analytics</div>
                    <div class="checkbox-count">(21)</div>
                </div>
            </label>
            <label class="checkbox-label">
                <input type="checkbox" onchange="filterByLabel('Community')">
                <div class="checkbox-content">
                    <div>Community</div>
                    <div class="checkbox-count">(9)</div>
                </div>
            </label>
            <label class="checkbox-label">
                <input type="checkbox" onchange="filterByLabel('Influencer Marketing')">
                <div class="checkbox-content">
                    <div>Influencer Marketing</div>
                    <div class="checkbox-count">(3)</div>
                </div>
            </label>
            <label class="checkbox-label">
                <input type="checkbox" onchange="filterByLabel('Platform')">
                <div class="checkbox-content">
                    <div>Platform</div>
                    <div class="checkbox-count">(3)</div>
                </div>
            </label>
            <label class="checkbox-label">
                <input type="checkbox" onchange="filterByLabel('SEO')">
                <div class="checkbox-content">
                    <div>SEO</div>
                    <div class="checkbox-count">(1)</div>
                </div>
            </label>
            <label class="checkbox-label">
                <input type="checkbox" onchange="filterByLabel('Marketing')">
                <div class="checkbox-content">
                    <div>Marketing</div>
                    <div class="checkbox-count">(5)</div>
                </div>
            </label>
        </div>

        <div class="screen_content screen_active" id="terms-container">

            <!-- <div class="card">
                <div class="card_title">
                    <div class="card_type_title">Caption</div>
                    <div class="card_type_social">Social</div>
                </div>
                <p>The text accompanying a photo or video on social media that provides context.</p>
                <a href="#" class="card_link" onclick="toggleContent()">View Detail <img src="./Frame.svg" class="" /></a>
           
            </div> -->

        </div>
        <div class="screen_detail-content" id="data-container">
            <a class="detail-card-back" onclick="toggleContent()">
                << Back to the Glossary</a>
                    <div class="detail-card">
                        <div class="card-detail-info" id="card-detail-info">
                            <!-- <div class="card-detail-info_text_content_marketing">Content Marketing</div>

                            <div class="card-detail-info_text_definition">Definition</div>
                            <p class="text_p">Engagement rate is a metric that measures the level of interaction by followers and viewers with your social media content. It's typically calculated by dividing the total number of engagements (likes, comments, shares) by the total number of followers or impressions.</p>

                            <div class="card-detail-info_text_example">Examples</div>
                            <p class="text_p text_example">A post receiving 100 likes from an account with 1,000 followers has a 10% engagement rate</p>

                            <h3>Related Terms</h3>
                            <div class="related-terms">
                                <div class="related-term-items">Content</div>
                                <div class="related-term-items">Content Strategy</div>
                                <div class="related-term-items">Content Syndication</div>
                            </div> -->
                        </div>
                    </div>
                    <div class="content-detail">
                        <div class="card-detail">
                            <div class="card-detail_title">
                                <div class="card-detail_type_title">Hashtag</div>
                                <img class="card-detail_type_social" src="./Frame_thang.svg" />
                            </div>
                            <p>A word or phrase preceded by the # symbol, used to categorize content and make it discoverable.</p>

                        </div>
                        <div class="card-detail">
                            <div class="card-detail_title">
                                <div class="card-detail_type_title">Reach</div>
                                <img class="card-detail_type_social" src="./Frame_cot.svg" />
                            </div>
                            <p>The total number of unique users who see your content on a social media platform.</p>

                        </div>
                        <div class="card-detail">
                            <div class="card-detail_title">
                                <div class="card-detail_type_title">Social Listening</div>
                                <img class="card-detail_type_social" src="./Frame_listen.svg" />
                            </div>
                            <p>Monitoring social media channels for mentions and conversations related to your brand.</p>

                        </div>
                        <div class="card-detail">
                            <div class="card-detail_title">
                                <div class="card-detail_type_title">Algorithm</div>
                                <img class="card-detail_type_social" src="./Frame_code.svg" />
                            </div>
                            <p>A set of rules that determine what content users see in their social media feeds.</p>

                        </div>
                    </div>
        </div>
    </div>

    <div class="pagination">
        <button id="prev">Previous</button>
        <button id="next">Next</button>
    </div>


    <script>
        const defaultA = [{
                "term": "A/B Testing",
                "definition": "A method of comparing two variations of content (e.g., ads, posts, emails) to determine which performs better based on engagement metrics.",
                "example": "Testing two versions of a Facebook ad with different CTAs: 'Sign Up Now' vs. 'Learn More.'",
                "category": "Analytics"
            },
            {
                "term": "Ad Scheduling",
                "definition": "The practice of setting specific times and days for ads to be displayed to maximize reach or engagement.",
                "example": "Scheduling Instagram ads to run only during evenings and weekends.",
                "category": "Analytics"
            },
            {
                "term": "Algorithm",
                "definition": "A set of rules and calculations used by social media platforms to prioritize and display content based on user engagement, relevance, and recency.",
                "example": "Instagram ranks posts with high engagement (likes/comments) higher in feeds.",
                "category": "Platform"
            },
            {
                "term": "Analytics",
                "definition": "The process of collecting and analyzing data to evaluate social media performance and effectiveness.",
                "example": "Using Facebook Insights to track post reach, engagement, and conversions.",
                "category": "Analytics"
            },
            {
                "term": "Avatar",
                "definition": "A profile picture or digital representation of a user or brand on social media.",
                "example": "A company using its logo as its Twitter profile image.",
                "category": "Social"
            }
        ]
        // JS phân trang
        var tearm_detail = {
            "term": "A/B Testing",
            "definition": "A method of comparing two variations of content (e.g., ads, posts, emails) to determine which performs better based on engagement metrics.",
            "example": "Testing two versions of a Facebook ad with different CTAs: 'Sign Up Now' vs. 'Learn More.'",
            "category": "Analytics",
            "relatedTerms": ['Content', 'Content Strategy', 'Content Syndication'],
        };

        var items = <?php echo json_encode($data); ?>;

        var list_terms_filter = items;
        var totalItems = items.length;
        var cards = document.querySelectorAll('.card');
        const btnNext = document.getElementById('next');
        const btnPrev = document.getElementById('prev');
        let currentPage = 0;
        const cardsPerPage = 6;

        function renderTerms(list = defaultA) {
            const container = document.getElementById('terms-container');

            container.innerHTML = '';
            list?.forEach(term => {
                const card = `
                    <div class="card">
                        <div class="card_title">
                            <div class="card_type_title">${term.term}</div>
                            <div class="card_type_social">${term.category}</div>
                        </div>
                        <p>${term.definition}</p>
                        <a href="#" class="card_link" onclick="toggleContent()">View Detail <img src="./Frame.svg" /></a>
                    </div>
                `;
                container.innerHTML += card; // Thêm thẻ card vào container
            });

            displayCards();

        }

        function selectLetter(letter = 'A') {
            const upperCaseLetter = letter.toUpperCase();
            list_terms_filters = items.filter(item => item.term[0].toUpperCase() === upperCaseLetter);

            renderTerms(list_terms_filters);

            const letters = document.querySelectorAll('.browse-letter a');
            letters.forEach(letter => {
                letter.classList.remove('selected_alphabet');
            });

            const selectedLetterElement = Array.from(letters).find(el => el.innerText.toUpperCase() === upperCaseLetter);
            if (selectedLetterElement) {
                selectedLetterElement.classList.add('selected_alphabet');
            }
        }

        function filterByLabel(value) {
            const checkboxes = document.querySelectorAll('.checkbox-label input[type="checkbox"]');
            const selectedLabels = [];
            let dataRender = []
            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    selectedLabels.push(value);
                }
            });
            const selectedLink = document.querySelector('a.selected_alphabet');
            if (selectedLabels.length > 0) {
                let dataFilterLabel = list_terms_filter.filter(item => item.category.includes(selectedLabels[0]));
                dataRender = dataFilterLabel.filter(item => item.term[0].includes(selectedLink?.innerText ?? 'A'));
            } else {
                dataRender = items.filter(item => item.term[0].includes(selectedLink?.innerText ?? 'A'));
                list_terms_filter = items;
            }
            selectLetter(selectedLink?.innerText ?? 'A');
         
            renderTerms(dataRender);
        }

        renderTerms();


        function displayCards() {
            cards = document.querySelectorAll('.card');

            cards.forEach((card, index) => {
                card.classList.remove('active');
                if (index >= currentPage * cardsPerPage && index < (currentPage + 1) * cardsPerPage) {
                    card.classList.add('active');
                }
            });
            updateButtons();
            updatePagination();
        }

        function updateButtons() {
            btnPrev.disabled = currentPage === 0; // Disable nút Previous nếu đang ở trang đầu
            btnNext.disabled = (currentPage + 1) * cardsPerPage >= cards.length; // Disable nút Next nếu không còn trang
        }

        btnNext.addEventListener('click', () => {
            if ((currentPage + 1) * cardsPerPage < cards.length) {
                currentPage++;
                displayCards();
            }
        });

        btnPrev.addEventListener('click', () => {
            if (currentPage > 0) {
                currentPage--;
                displayCards();
            }
        });

        // Hiển thị các thẻ card đầu tiên
        displayCards();

        // ----------------- On/Off nút phân trang -------------------

        // Hàm để cập nhật trạng thái của các nút phân trang
        function updatePagination() {
            const prevBtn = document.getElementById('prev');
            const nextBtn = document.getElementById('next');

            if (cards?.length <= cardsPerPage) {
                prevBtn.style.display = 'none'; // Ẩn nút Previous
                nextBtn.style.display = 'none'; // Ẩn nút Next
            } else {
                prevBtn.style.display = 'inline'; // Hiện nút Previous
                nextBtn.style.display = 'inline'; // Hiện nút Next
            }
        }

        // Gọi hàm để cập nhật tình trạng nút khi tải trang
        updatePagination();


        // ----------------- On/Off detail terms -------------------
        function toggleContent() {
            const contentDiv = document.querySelector('.screen_content');
            const detailContentDiv = document.querySelector('.screen_detail-content');

            if (contentDiv.classList.contains('screen_active')) {
                contentDiv.classList.remove('screen_active');
                detailContentDiv.classList.add('screen_active');
            } else {
                detailContentDiv.classList.remove('screen_active');
                contentDiv.classList.add('screen_active');
                showData();
            }
        }

        // Hàm để hiển thị dữ liệu trên HTML
        function showData() {
            const cardDetailInfo = document.getElementById('card-detail-info');
            cardDetailInfo.innerHTML = `
                <div class="card-detail-info_text_content_marketing">${tearm_detail.term}</div>
                <div class="card-detail-info_text_definition">Definition</div>
                <p class="text_p">${tearm_detail.definition}</p>
                <div class="card-detail-info_text_example">Examples</div>
                <p class="text_p text_example">${tearm_detail.example}</p>
                <h3>Related Terms</h3>
                <div class="related-terms">
                    ${tearm_detail.relatedTerms.map(term => `<div class="related-term-items">${term}</div>`).join('')}
                </div>
            `;
        }

        // Gọi hàm để hiển thị dữ liệu
        showData();
        // Close JS phân trang
    </script>
</body>

</html>