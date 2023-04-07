<a href="https://laravel.com" target="_blank">
<p align="center"><img src="https://cdn.discordapp.com/attachments/1092068663827370044/1092910657667612803/LOGO-V.png" width="200" alt="Laravel Logo"></p>
</a>

<p> If you don't have this file, you can copy and paste in cmd. </p>

```sh
git clone https://github.com/Valent142003/Portfolio-VLTs.git 
```

<p> Or you have this file, but the file is not update, you can copy and paste in cmd. </p>

```sh
git pull https://github.com/Valent142003/Portfolio-VLTs.git 
```

Then, open file `Portfolio-VLTs` with VSCode and open terminal, copy and paste.

```sh
npm i
npm run dev
```

Next, rename `.env.example -> .env` and change name database `DB_DATABASE=project_name`.

<p> If you want to create datebase, open new open terminal, copy and paste. </p>

```sh
php artisan migrate
```

<p> After all, open new open terminal, copy and paste. </p>

```sh
php artisan serve
```
