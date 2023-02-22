# About GreenLeaf
## OBJECTIVE OF THE SYSTEM
GreenLeaf will be serving mentioned objectives:
1.	Provide a friendly and attractive user interface.
2.	Dynamic shopping page to add products from the database in real time.
3.	Listing products in category-wise fashion.
4.	Providing affordable products to users.
5.	Collection of users’ messages or feedback in form of a contact form.
6.	Provide a blog section to users to enlighten them about plants, plantation activities etc
7.	Provides a cart system for users to make them purchase multiple products at a time.
8.	Providing a website with a no-signup or login setup.
9.	Users’ products in the cart are kept intact every time they visit the website until they place the order.
10.	Users just need to enter shipping details once.
11.	Wide range of payment modes for customers powered by Razorpay gateway.
12.	Provide FAQs to users to help them to join this green journey.
<br>

## FEATURES OF THE SYSTEM

<pre>
<ol>
<li><em><strong>Attractive and user-friendly interface:</strong></em> GreenLeaf has a beautiful UI matching its themes of promoting greenery by being an E-nursery. With this, the 
interface is designed in a way to make it easy for users to navigate through the web pages and get what they are wanting to. The idea of GreenLeaf is to make users 
enjoy shopping for nursery items from the comfort of their homes.</li>
<li><em><strong>Shopping and knowledge at the same stop:</strong></em> GreenLeaf not only provide products to shop for but also gives some reading material to the users in case they 
want to know more about plantation, products, or gardening. GreenLeaf consists of some blog materials with specially curated data in form of readable format and 
video formats. We do provide common FAQs on the website for users. </li>
<li><em><strong>Selected range of products listed:</strong></em> We have listed a selected range of products that are beautiful and easy to plant at users’ desired place, let it be home or office.
<li><em><strong>Dynamicity:</strong></em> GreenLeaf shop and cart pages are designed in such a way that it runs in sync with their database. Every time the user visits or refreshes 
the shop page, products get shuffled on the screen making the user come across new products each time.</li>
<li><em><strong>Category-based shopping:</strong></em> Our products are categorized into 3 categories – plants, pots, and accessories, which makes it easy for users to see what they 
want.</li>
<li><em><strong>No signup/login required:</strong></em> We have no login/signup feature keeping in mind a smoother flow for users. Users need not enter any password or OTP to buy 
products. They just need to add items to the cart and place the order after entering their shipping details. </li>
<li><em><strong>Cart System:</strong></em> GreenLeaf comes with a system of carts, to facilitate users to buy multiple products at a time.</li>
<li><em><strong>Keeping data intact and stored without login:</strong></em> We do not provide signup/login functionality, still we keep some features intact. The cart of a user keeps
the products she/he added every time they browse back to the site. Cart is cleared automatically after the order is placed.</li>
<li><em><strong>One-time adding of shipping details:</strong></em> GreenLeaf maintains its users’ shipping details in it from the first time she/he has placed an order. The only 
thing you need to remember is your phone number. No password, no OTP required.</li>
<li><em><strong>Smooth and multiple payment options:</strong></em> GreenLeaf is integrated with a smooth and multiple payment option gateway by Razorpay.</li>
</ol>
</pre>
<br>

## MODULE WISE DETAILED SYSTEM SPECIFICATION:

<pre>
<ol>
<li><strong>Home/Landing page:</strong> This page of GreenLeaf acts as an introduction to the user about our system. All the important hyperlinks of the system are 
included on this page like Shopping Page (with categories bifurcation), Blogs, About Us, and FAQs. The page has attractive content and user-oriented features to 
help them get involved with the system.</li>
<li><strong>Shop:</strong> This module of the system shows the vast range of products to the user. The user has control over choosing the category by which she/he 
wants to shop. The module has 3 categories – Plants, Pots, and Accessories. This module has a dynamic shuffling feature that shuffles the products each time page is 
reloaded or revisited, making users come across all kinds of options. When user presses “Add to cart” the product is added to our cart table along with the unique 
cookie ‘userId’ of customer.</li>
<li><strong>Cart:</strong> In this module, the user can see all her/his products added by them. This module has 2 sub-modules built into it: -
<ul>
<li><strong>Order Summary:</strong> Users are shown their added products in the cart in this section. They can increase or decrease the quantity of products in this 
section. The total amount is calculated in this sub-module. Turning the quantity to 0 leads to the deletion of the product from the cart.</li>
<li><strong>Shipping Details:</strong> This sub-module is designed to hold users’ shipping details like address, pin code, and basic details like name, phone number, 
email, etc. If the user is re-visiting the site for ordering products, they just need to enter their number in the field and press “Fetch My Data”, all the saved 
details are printed to the required fields automatically from the database. If GreenLeaf is unable to find user’s data i.e. user is first time visiting the site, 
she/he need to fill all the fields and click “Save” button. With this all the data gets saved to our database.</li>
</ul>
On pressing the “Place Order” button, the control goes to our payment gateway. If the transaction turns out to be successful then the data from cart table (matched 
by userId cookie) is sent to ‘orders’ table of our database, with a unique Order ID and matching with mobile number of user. Also, the data from cart table of that 
user is cleared, and set to blank for next time.</li>
<li><strong>Payment gateway:</strong> This module is a payment window for the user having multiple modes of payment. The Razorpay test API is integrated into our 
cart page for this module.</li>
<li><strong>Blogs Pages:</strong> We have multiple blogs in GreenLeaf for users. The blogs consists of informative content to read and watch related to plants, 
nursery, gardening, activities, etc</li>
<li><strong>Contact Us:</strong> This module is provided to users for writing to us. Comprises of fields accepting their name, email, contact number and their 
message</li>
<li><strong>About Us and FAQs:</strong> These are static modules to present basic information regarding GreenLeaf and commonly asked questions (FAQs).</li>
</pre>

## Site Map

![SiteMap](https://user-images.githubusercontent.com/48471308/220604367-1a5fe128-b073-4166-aebc-015524913113.jpg)

## LANGUAGES AND TECHNOLOGY USED
<pre>
<h3>
HTML
CSS
Bootstrap 4 and 5
JavaScript
PHP
XAMPP
MySQL Database
</h3>
</pre>

## RESOURCES

<pre>
DEVELOPMENT RESOURCES
•	Bootstrap (https://getbootstrap.com/)
•	MDN (https://developer.mozilla.org/en-US/)
•	W3 Schools (https://www.w3schools.com/)
•	Stack Overflow (https://stackoverflow.com/)
•	Google Images (https://www.google.co.in/imghp?hl=en&authuser=0&ogbl)
•	Geeksforgeeks (https://www.geeksforgeeks.org/)
•	The Black Book – Web Development

CONTENT RESOURCES
•	YouTube India (https://www.youtube.com/)
•	Blog Websites (Nursery and Gardening)
•	NurseryLive (https://nurserylive.com/)

</pre>
