
<p align="left">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# TestWork8383 - тестовое задание

Идея проекта посмотреть курсы студентов. Какие они курсы выбирают, когда начинали курс, когда закончивают.

Чтобы запускать проект:
- запускаете миграцию
```
php artisan migrate
```
- запускаете seeder-ы для тестовых данных
```
php artisan db:seed
```
- запускаете саму проект
```
php artisan serve
```

Потом заходите в [http://127.0.0.1:8000](http://127.0.0.1:8000).

## Роуты

API | Запрос | Описание | Параметры
------------ | ------------- | ------------- | ----------
api/students | GET | *Поиск по студентам* | `name`

####Параметры

Название | Описание | Пример
------------ | ------------- | -------------
`name` | Поиск по имени | John
`birth_date` | Поиск по дате рождения | 1990-05-22
`phone` | Поиск по номеру телефона | 77025682565
`course_id` | Поиск курса студента | 8
`start_date` | Поиск по времени когда начал | 2020-03-08
`end_date` | Поиск по времени когда закончил | 2020-08-25
