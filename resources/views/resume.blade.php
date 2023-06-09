<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Resume</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hack-font/3.3.0/web/hack.min.css"
        integrity="sha512-XgCw4Srl8lC1ECwcaHwAU0WnxQwHkqmInzg9wJLtGB7DRuMaXPuK2k9WJ2AwRDGdrgK9eJpZl2hUlLi2WQssmw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="flex gap-4">
        <div class="flex p-4 h-screen flex-column w-2/6 bg-gray-200 gap-4">
            <section>
                <h1 class="text-3xl mb-4">{{ ucfirst($fullname) }}</h1>
                <h2 class="text-2xl font-bold">CONTACTS</h2>
                <p class="text-xl">Email: {{ $email }}</p>
                <p class="text-xl">Phone: {{ $phone }}</p>
                <p class="text-xl">Address: {{ $address }}</p>
            </section>
            <section class="education">
                <h2 class="text-2xl font-bold">EDUCTAION</h2>
                <p class="text-xl"> Degree: TEST</p>
                <p class="text-xl">School: TEST</p>
                <p class="text-xl">Start Date: TEST</p>
                <p class="text-xl">Graduation Date: TEST</p>
            </section>
            <section class="skills">
                <h2 class="text-2xl font-bold">Skills</h2>
                <p class="text-xl"> SKILL_NAME ***</p>
                <p class="text-xl"> SKILL_NAME *</p>
                <p class="text-xl"> SKILL_NAME **</p>
                <p class="text-xl"> SKILL_NAME ****</p>
            </section>
        </div>
        <div class="flex p-4 h-screen flex-column w-4/6 gap-4">
            <section class="about">
                <h2 class="text-2xl font-bold mb-4">ABOUT ME</h2>
                <p class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, iure illum ad
                    cumque sapiente, rem numquam reiciendis nisi necessitatibus consequuntur, exercitationem laborum.
                    Provident dolore tenetur, nobis perspiciatis reprehenderit expedita distinctio?
                    Nesciunt aliquam, fugiat quisquam ipsum eum magnam, consequuntur autem distinctio minima reiciendis
                    alias mollitia quos maxime provident ut nostrum non cumque rerum in dolorum eaque, quam eos! At,
                    sapiente. Laborum!
                    Quidem soluta consequatur atque a voluptates assumenda delectus, praesentium, optio sed nam vero
                    itaque eaque aliquid placeat ipsa enim? Nemo ratione excepturi iste inventore quisquam ullam officia
                    vel quaerat? Placeat.</p>
            </section>
            <section class="work">
                <h2 class="text-2xl font-bold mb-4">WORK HISTORY</h2>
                <h3 class="text-2xl">Job Title: TEST</h3>
                <p class="text-xl">Employer: TEST</p>
                <p class="text-xl">Start Date: TEST</p>
                <p class="text-xl">End Date: TEST</p>
            </section>
        </div>
    </div>
</body>

</html>
