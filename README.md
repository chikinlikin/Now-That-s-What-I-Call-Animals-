# Now That's What I Call Animals! #
## Launch site locally ##
Go to cmd<br>

> cd project-folder <br>
> php artisan serve

In browser, visit http://127.0.0.1:8000/

## PayPal test user credentials ##
There's a sandbox user account for this app. Please use:<br>
e-mail: sb-vqrna986402@personal.example.com
password: C#:8ekN/

## Namespace issue ##
I got stuck with namespaces/dependencies :(

As a result, the PayPal payment processes succesfully, but then does not trigger the necessary DB reads/writes to update the User and Member information tables. However, I have implemented all the DB operations for User and Member (see those classes), they just aren't 'wired up' correctly... It was just the project structure/Laravel that I got stuck with...

## Members-only download ##
The members-only download is secured in the following ways:

1. A numbered list
    1. A nested numbered list
    2. Which is numbered
2. Which is numbered
