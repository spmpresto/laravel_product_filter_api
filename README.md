Develop an API backend using the Laravel framework. Use MySQL and PostgreSQL as the databases.

Required functionality:

You need to implement a "product catalog." A product should have the following attributes: name, price, and quantity. The product properties (options) should be dynamic, meaning they need to be stored in the database.

Implement filtering of the product list with multiple selection options, such as:

GET /products?properties[property1][]=value1_of_property1&properties[property1][]=value2_of_property1&properties[property2][]=value1_of_property2

A GET API method is required for retrieving the paginated list of products ("product catalog") with pagination of 40 items per page.

Clarification:

It is necessary to create a product filter based on the product options. For example, there are products like "table lamp" with options such as shade color, frame color, and brand. The task is to filter products based on these options.

An example would be any online store, like https://svetilniki.shop/catalog/lustri.



TEST query through POSTMAN: http://127.0.0.1:8000/api/products?properties[style][]=Classic&properties[country][]=Germany&properties[color][]=red&properties[type][]=Test

Used mysql:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=product_filter_api
DB_USERNAME=root
DB_PASSWORD=

---------------------------------------------------------------------------------------------------


Разработать API backend на фреймворке Laravel. В качестве БД использовать MySQL, Postgresql. 


Требуемый функционал:

Необходимо реализовать “каталог товаров”. Товар: название, цена, количество. Свойства (опции) товара: название

Свойства товара должны быть произвольными т е заполняться в БД

Реализовать фильтрацию списка товаров с множественным выбором, например GET /products?properties[свойство1][]=значение1_своства1&properties[свойство1][]=значение2_своства1&properties[свойство2][]=значение1_свойства2.

Нужен api GET метод получения списка товаров (“каталог товаров”) пагинированных по 40

!Уточнение - пояснение!

Необходимо  сделать фильтр товаров по опциям товаров, например, есть товары "настольный светильник", с опциями цвет плафона, цвет арматруы, бренд. Нужно по опциям отфильтровать товары.

Также пример любой интернет магазин https://svetilniki.shop/catalog/lustri 



ТЕСТОВЫЙ ЗАПРОС через POSTMAN: http://127.0.0.1:8000/api/products?properties[style][]=Classic&properties[country][]=Germany&properties[color][]=red&properties[type][]=Test

Использовался mysql:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=product_filter_api
DB_USERNAME=root
DB_PASSWORD=