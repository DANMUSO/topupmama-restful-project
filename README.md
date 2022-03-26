## TopUp Mama Microservice APIs. There are six endpoints as listed below.

-   List of Books Endpoint.
-   Save Comments Endpoint.
-   List of Comments Endpoint.
-   List of all Characters Endpoint.
-   Sort Characters By Name | Gender | Age Endpoint.
-   Filter Character By Gender Endpoint.

These endpoints return well formatted JSON Schemas which are consumable not only on Web-Based Applications but also to highly scalable Mobile Applications both Android and iOS. I have used postman to test the responses JSON Schemas and they have passed the test. I have attached screencast for this JSON Schema Tests.

<h1 align="center">
<img alt="Microservice APIs" title="JSON Schema Tests screencast" src="https://topup-mama-files.s3.ap-south-1.amazonaws.com/screencastAPIs.PNG"  /><br>
</h1>

## Postman Microservice APIs Documentation:

https://documenter.getpostman.com/view/6098415/UVsTr3Nc

### List of Books Endpoint and response

-   Description: This endpoint is returning all book objects containing the name of Author, count of comments and the other parameters.
-   Endpoint: https://topup-mama-project.herokuapp.com/apis/v1/books
-   HTTP Verb: GET
-   Screencast:
<h1 align="center">
<img alt="Microservice APIs" title="" src="https://topup-mama-files.s3.ap-south-1.amazonaws.com/screencastAPIs.PNG"  /><br>
</h1>

### Save Comments Endpoint and Request | response

-   This endpoint will accept two parameters such as comment and book_isbn, book_isbn will be passed as path variable while comment will be in the request body. Upon submitting comment, commenter Public IP Address will be saved along with comment and book_isbn. Book_isbn is a foreign key in comments table.
-   Endpoint: https://topup-mama-project.herokuapp.com/apis/v1/books/comments/{book_isbn}
-   HTTP Verb: POST
-   Screencast:
<h1 align="center">
<img alt="Microservice APIs" title="" src="https://topup-mama-files.s3.ap-south-1.amazonaws.com/save+comment+API.PNG"  /><br>
</h1>

### List of Comments Endpoint and response

-   This endpoint is returning array of objects, each object containing, book_isbn, public ip adddress and comment and saved date.
-   Endpoint: https://topup-mama-project.herokuapp.com/apis/v1/books/comments
-   HTTP Verb: GET
-   Screencast:
<h1 align="center">
<img alt="Microservice APIs" title="" src="https://topup-mama-files.s3.ap-south-1.amazonaws.com/1+list+of+comments.PNG"  /><br>
</h1>

### List of all Characters Endpoint and response

-   This endpoint list all Character from the external API without any modification.
-   Endpoint: https://topup-mama-project.herokuapp.com/apis/v1/characters
-   HTTP Verb: GET
-   Screencast:
<h1 align="center">
<img alt="Microservice APIs" title="" src="https://topup-mama-files.s3.ap-south-1.amazonaws.com/1+List+of+character.PNG"  /><br>
</h1>

### Sort Characters By Name | Gender | Age Endpoint and response

-   This endpoint is returning array of objects that are sorted by name, gender and age.
-   Endpoint: https://topup-mama-project.herokuapp.com/apis/v1/characters/sortby/{param}
-   HTTP Verb: GET
-   Screencast:
<h1 align="center">
<img alt="Microservice APIs" title="" src="https://topup-mama-files.s3.ap-south-1.amazonaws.com/1+Sort+Character.PNG"  /><br>
</h1>

### Filter Characters By Gender Endpoint and response

-   This endpoint is returning array of objects that are filtered by gender.
-   Endpoint: https://topup-mama-project.herokuapp.com/apis/v1/characters/filterby/{param}
-   HTTP Verb: GET
-   Screencast:
<h1 align="center">
<img alt="Microservice APIs" title="" src="https://topup-mama-files.s3.ap-south-1.amazonaws.com/1+Filter+Characters.PNG"  /><br>
</h1>

# Conclusion.

These endpoints are deployed in Heroku Platform which is AWS Platfrom as a Service. I am passionate in implementing Microservice APIs for web-based Applications and highly scalable mobile appplications both iOS and Android, am also conversant with third party APIs such as Firebase Real-Time Notifications API, Google Map APIs, Global and Local Online Payment Gateway APIs and Control Version System(github, gitlab, Bitbucket, Azure Devops and AWS CodeCommit). I have hosted many applications in cloud based servers such as Heroku, AWS Beanstalk and Azure Web Apps. 

I am also certified as AWS Cloud Practitioner and Microsoft Azure Fundamentals and currently am pursuing AWS Solutions Architect-Associate.

I am looking forward to work with you.

 Best regard

 Daniel Kimani M

 Sofyware Engineer.