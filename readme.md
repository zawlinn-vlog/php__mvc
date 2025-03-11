[![php](https://img.shields.io/badge/PHP-000?style=for-the-badge—=ko-fi—=white)](#)

> I'm Zaw Linn Tun a Frontend Web Developer on [Zaw Linn - Vlog](https://www.github.com/zawlinn-vlog). :heart:

<!-- #### PROJECT SIMPLE &mdash; -->

<!-- ![PROJECT_IMG](./assets/img/sample.png) -->

<br/>

### What is MVC?

> `MVC` is design pattern which make easier for development by separating project into Model, Views and Controller.

|  #  | Title      | Description                                       |
| :-: | ---------- | ------------------------------------------------- |
|  1  | Model      | Handle Database Job.                              |
|  2  | View       | Showing Data to User.                             |
|  3  | Controller | Handle User Request.                              |
|     |            | Generate data from database base on user request. |
|     |            | Decide which View to show base on user request.   |

<hr>

### What will we learn &mdash;

- Custom Route Handling
- Deciding user input and handling response
- Querying Database using PDO
- Creating multiples Libraries
- Writing code to be reusable & reliable

<hr>

https://www.example.com/post/show/1

https://www.example.com -> Site URL

`/post/show/1`-> Parameters -> `Controller` divided into Post(Class), show(Method) and 1(Parameters).

eg.

```php

    class Post{
        public function show($id){
            echo "id is " . $id;
        }
    }

```

#### To Prevent Access

> Create `.htaccess` file and then write this command &mdash;

```sh
    Option -indexs
```

#### To Get URL

> Create `.htaccess` file and then write this command &mdash;

```sh
    <IfModule mod_rewrite.c>

        RewriteEngine On
        Options -Multiviews # if index folder, access this index folder
        RewriteBase /php__mvc/Project%2001/public/ # /php__mvc/Project%2001/public/ can be change
        RewriteCond %{REQUEST_FILENAME} !-d
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]

    </IfModule>
```

#### To Change to public Dir to be parent Dir

> Create `.htaccess` file and then write this command &mdash;

```sh
    <IfModule mod_rewrite.c> # include or not
        RewriteEngine On
        RewriteRule ^$ public/ [L]
        RewriteRule (.*) public/$1 [L]
    </IfModule> # include or not

```

<br>

<!-- ![Screenshot of Project](./s1.png) -->

What I use packages are &mdash;

[![My Skills](https://skillicons.dev/icons?i=html,css,js,bootstrap,sass,php,mysql,npm,git,github,vscode&perline=3)](https://skillicons.dev)

<br>

[![PHP PREPROCESSOR: Introduction](https://img.shields.io/badge/PHP_PREPROCESSOR_—-000?style=for-the-badge—=ko-fi—=white)](#)

📫 Reach me out!

[![Facebook Badge](https://img.shields.io/badge/-@zawlinn_vlog-1ca0f1?style=flat&labelColor=1ca0f1&logo=facebook&logoColor=white&link=https://faebook.com/zawlinn_profile)](https://facebook.com/zawlinn.vlog)
[![youtube Badge](https://img.shields.io/badge/-zawlinn_vlog-c0392b?style=flat&labelColor=c0392b&logo=youtube&logoColor=white)](https://youtube.com/@zawlinn-vlog)
[![Gamil Badge](https://img.shields.io/badge/-zawlinn.profile-c0392b?style=flat&labelColor=c0392b&logo=gmail&logoColor=white)](mailto:zawlinn.profile@gmail.com)

<!-- TODO: Add last video link -->

<details>
    <summary>
        My Portfolio
    </summary>
    <br/>

- :earth_asia: I’m currently working at @Mae Sot Market as a sale staff
- :computer: Most used line of code git commit -m "Initial Commit"
- :brain: I’m looking for help with Outstanding Video ideas.
- :mailbox_with_mail: How to reach me: zawlinn.profile@gmail.com.
- :heart: In a relationship with React
</details>
