<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Technology Home Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- ✅ Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- ✅ Optional: Customize Tailwind colors if needed -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#111022',
                        secondary: '#FF6C1E',
                        accent: '#198754' // green-500
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                    },
                }
            }
        };
    </script>
</head>

<body class="bg-primary text-white font-poppins">

    <!-- Header/Navbar -->
    <header class="px-4 lg:px-0 py-2 lg:py-4 container mx-auto flex justify-between items-center bg-primary">
        <!-- Hamburger Icon -->
        <button class="text-white w-[58px] lg:hidden">
            <!-- Menu Icon -->
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" class="w-7 h-7">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <img src="assets/images/logo.png" alt="Logo" class="h-[40px] lg:h-[70px]">
        <nav class="hidden md:flex space-x-4 text-sm text-gray-300">
            <a href="/" class="text-base p-2 hover:text-secondary border-b-2 border-transparent hover:border-secondary">Home</a>
            <a href="/hackathon.php" class="text-base p-2 hover:text-secondary border-b-2 border-transparent hover:border-secondary">Hackathon</a>
            <a href="/webinars.php" class="text-base p-2 hover:text-secondary border-b-2 border-transparent hover:border-secondary">Webinars</a>
            <a href="/articles.php" class="text-base p-2 hover:text-secondary border-b-2 border-transparent hover:border-secondary">Articles</a>
            <a href="/blogs.php" class="text-base p-2 hover:text-secondary border-b-2 border-transparent hover:border-secondary">Blogs</a>
            <a href="#" class="text-base p-2 hover:text-secondary border-b-2 border-transparent hover:border-secondary">Contact</a>
        </nav>

        <div class="flex items-center gap-4">
            <div class="lg:p-3 lg:border lg:border-[#8A858D] lg:rounded">
                <img src="assets/images/search.png" alt="Search" class="w-[18px] h-[17px] max-w-fit">
            </div>
            <button class="block lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5.121 17.804A11.963 11.963 0 0112 15c2.761 0 5.304.947 7.121 2.804M15 10a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
            </button>
            <div class="absolute hidden lg:block top-[50px] lg:top-0 max-w-[100px] w-full lg:max-w-full lg:relative lg:border lg:border-secondary lg:px-4 lg:py-1 lg:rounded">
                <button class="px-4 py-1 text-base lg:border-r lg:border-secondary">Login</button>
                <button class="px-4 py-1 text-base">Sign Up</button>
            </div>
        </div>
    </header>
    <div class="hidden lg:block text-[20px] text-center w-[70%] mx-auto font-semibold bg-black py-[30px] rounded mt-[40px] mb-6">Leader Board Banner</div>