<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="style.css">
    <script src="8lab.js" defer></script>
    <title>Cats facts</title>
   
</head>
<body>
<header class="header">
        <nav>
            <img class="logo" src="cat.jpg">
            <div class="title">Facts about cats</div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="search-form">
                <input type="text" class="search-field" id="search-field">
                <button class="search-btn">Поиск</button>
            </div>
            <div class = "autocompletion">
        
            </div>
            <div class="pagination-info">
                <span>
                    Показывать по
                    <select name="per-page" class="per-page-btn">
                        <option>5</option>
                        <option selected>10</option>
                        <option>15</option>
                        <option>20</option>
                        <option>25</option>
                        <option>50</option>
                        <option>100</option>
                    </select>
                    записей на странице
                </span>
                <span class="current-interval-info">
                    Показаны записи с <span class="current-interval-start">1</span> по <span class="current-interval-end">10</span> из <span class="total-count">190</span>
                </span>
            </div>
            <div class="facts-list" data-url="http://cat-facts-api.std-900.ist.mospolytech.ru/facts">
                <div class="facts-list-item">
                    <div class="item-content">
                        Scottish sailer Alexander Selkirk once survived for 4 years on a deserted island thanks to feral cats that protected him
                        from large rats during the night.
                    </div>
                    <div class="item-footer">
                        <div class="author-name">
                            Alex Wohlbruck
                        </div>
                        <div class="upvotes">
                            4
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination">
        </div>
    </main>
</body>
</html>