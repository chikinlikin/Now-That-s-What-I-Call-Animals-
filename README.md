# Now That's What I Call Animals! #
## Launch the site locally ##
* Download and extract the project<br>
* Go to cmd<br>

> cd project-root <br>
> composer install<br>
> php artisan key:generate<br>
> npm install
> npm run development
* Follow the steps here to create a VM https://laravel.com/docs/5.8/homestead
> php artisan serve

* In browser, visit http://127.0.0.1:8000/

## PayPal test user credentials ##
There's a sandbox user account for this app. Please use:<br>
e-mail: sb-vqrna986402@personal.example.com
password: C#:8ekN/

## Namespace issue ##
I got stuck with namespaces/dependencies :(

As a result, the PayPal payment processes succesfully, but then does not trigger the necessary DB reads/writes to update the User and Member information tables. 

However, I have implemented all the DB operations for User and Member (see those classes), they just aren't 'wired up' correctly... 

The error I am left with is this, and I tried multiple folder re-shuffles, includes and Facades...

'[Sun Feb  9 18:49:46 2020] PHP Fatal error:  Uncaught Error: Class 'App\Http\Controllers\User' not found in C:\Users\Hannah\hannahSite3\app\Http\Controllers\PaymentController.php:11
Stack trace:
#0 C:\Users\Hannah\hannahSite3\public\handle-payment.php(2): include()
#1 {main}
  thrown in C:\Users\Hannah\hannahSite3\app\Http\Controllers\PaymentController.php on line 11'

## Members-only download ##
The members-only download is secured in the following ways:

### 1. User must be logged into the website ###
### 2. User must have paid for membership (using the PayPal link on 'Home') ###
    1. After a successful PayPal checkout, payment and user info is added to the User and Member databases 
    2. The data is posted via aJax to a non-public class (PaymentController.php) using a public file 'include' (in payment-handler.php)
    3. Following successful DB updates, the user should be redirected to '/secret-page' (but this doesn't work so you instead have to visit http://127.0.0.1:8000/secret-page directly after making the PayPal payment. I have hardcoded this page with 'isMember = true' for now.)
### 3. The 'secret-page' validates that the user is both logged in, and that they are also a Member, by looking up their details in the User table. Then, if both these conditions are satisfied, a greeting will display along with a download link. ###
    1. If the user is logged in but is not also a Member then a different greeting will display and no download link is shown
    2. As mentioned above, 'isMember' is currently hardcoded to 'true' as I couldn't get the DB working.
### 4. Clicking the 'Secret download!' link on the 'secret-page' routes the user through the SecretPageController where the id (string) sent on the request is matched to the one held in the class. This verifies the origin of the request and means that people can't try to trigger the download without coming from the 'secret-page' itself. ###
    1. The id is currently hardcoded but should be stored in an encrypted file and changed/regenerated frequently and randomly.
    2. Once the id is verified (as a match) then the user is forwarded to 'download.php'
### 5. 'download.php' has a path to the secret download file (which itself is stored in a storage folder) and the download begins automatically. The user is never shown the path to the file location. ###
