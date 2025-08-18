<script setup lang="ts">
import { Link, Head } from '@inertiajs/vue3';
import Footer from '@/components/Footer.vue';

</script>
<template>

    <Head>
        <title>Institucional</title>
        <meta name="description" content="NextClass, uma plataforma de ensino online." />
    </Head>
    <header class="px-8 py-2 flex justify-between items-center mx-auto max-w-400">
        <Link href="/">
        <img src="@assets/media/logo.svg" alt="Logo"
            class="w-13 h-13 rounded-full select-none hover:cursor-pointer" />
        </Link>
    </header>
    <main class="mx-auto max-w-400">
        <section class="min-h-120 flex items-center justify-center bg-white p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center max-w-5xl">
                <div class="flex justify-center">
                    <img src="@assets/media/images/landing/int-img-1.jpg" alt="Ilustração"
                        class="max-w-full h-auto rounded-full select-none hover:cursor-pointer">
                </div>

                <div>
                    <h1 class="text-2xl font-bold mb-4">
                        Para todos os alunos, todas as salas de aula.
                    </h1>
                    <p class="text-gray-600 mb-6">
                        Queremos sempre oferecer uma educação gratuita de alta qualidade em todos os lugares possíveis.
                    </p>

                    <div class="flex gap-4">
                        <Link href="/"
                            class="flex-1 bg-[#3B5F4A] text-center text-white px-6 py-2 rounded-md hover:bg-green-900 hover:scale-102 cursor-pointer select-none">
                        Cadastro
                        </Link>
                        <Link href="/"
                            class="flex-1 bg-[#3B5F4A]  text-center text-white px-6 py-2 rounded-md hover:bg-green-900 hover:scale-102 cursor-pointer select-none">
                        Login
                        </Link>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-[#3B5F4A] text-white py-12 px-6 2xl:rounded-3xl">
            <h2 class="text-center text-3xl mb-10 font-['Inder']">Como o NextClass Funciona?</h2>
            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="p-8 font-['Inder'] flex flex-col items-center">
                    <img src="@assets/media/images/landing/fig1.svg" class="mb-4 size-24 select-none" />
                    <h3 class="font-semibold mb-2">Aprenda rapidamente</h3>
                    <ul class="list-none space-y-1 text-gray-400">
                        <li class="flex items-center">
                            <img src="@assets/media/images/landing/check-icon.svg"
                                class="w-4 h-4 mr-2 select-none">
                            melhores ferramentas
                        </li>
                        <li class="flex items-center">
                            <img src="@assets/media/images/landing/check-icon.svg"
                                class="w-4 h-4 mr-2 select-none">
                            mais intuitivo
                        </li>
                        <li class="flex items-center">
                            <img src="@assets/media/images/landing/check-icon.svg"
                                class="w-4 h-4 mr-2 select-none">
                            mais simples
                        </li>
                    </ul>

                </div>
                <div class="p-8 font-['Inder'] flex flex-col items-center">
                    <img src="@assets/media/images/landing/pen-icon.png" class="mb-4 size-24 select-none" />
                    <h3 class="font-semibold mb-2">Funcionalidades Inteligentes</h3>
                    <ul class="list-none space-y-1 text-gray-400">
                        <li class="flex items-center">
                            <img src="@assets/media/images/landing/check-icon.svg"
                                class="w-4 h-4 mr-2 select-none">
                            Busca de disciplinas otimizada
                        </li>
                        <li class="flex items-center">
                            <img src="@assets/media/images/landing/check-icon.svg"
                                class="w-4 h-4 mr-2 select-none">
                            Histórico acadêmico completo
                        </li>
                        <li class="flex items-center">
                            <img src="@assets/media/images/landing/check-icon.svg"
                                class="w-4 h-4 mr-2 select-none">
                            Organização de horários
                        </li>
                    </ul>

                </div>
                <div class="p-8 font-['Inder'] flex flex-col items-center">
                    <img src="@assets/media/images/landing/chart-icon.png" class="mb-4 size-24 select-none" />
                    <h3 class="font-semibold mb-2">Aprenda rapidamente</h3>
                    <ul class="list-none space-y-1 text-gray-400">
                        <li class="flex items-center">
                            <img src="@assets/media/images/landing/check-icon.svg"
                                class="w-4 h-4 mr-2 select-none">
                            Melhore seu desempenho
                        </li>
                        <li class="flex items-center">
                            <img src="@assets/media/images/landing/check-icon.svg"
                                class="w-4 h-4 mr-2 select-none">
                            foco nos estudos
                        </li>
                        <li class="flex items-center">
                            <img src="@assets/media/images/landing/check-icon.svg"
                                class="w-4 h-4 mr-2 select-none">
                            melhores resultados
                        </li>
                    </ul>

                </div>
            </div>
        </section>

        <section class="min-h-120 flex items-center justify-center bg-white p-6">
            <div class="flex gap-8 items-center max-w-5xl flex-col-reverse md:flex-row">
                <div class="flex flex-col md:items-start">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-['Inder'] mb-4">Você tem a capacidade de aprender qualquer
                            coisa.</h2>
                        <p class="mb-6">Desenvolva um aprendizado sólido e profundo em matemática, ciências e muito
                            mais.
                        </p>
                    </div>
                    <Link href="/"
                        class="flex-1 bg-[#3B5F4A] text-white px-6 py-2 rounded-md hover:bg-green-900 hover:scale-102 cursor-pointer select-none">
                    Comece
                    aqui!</Link>

                </div>

                <div class="flex justify-center max-w-xs">
                    <img src="@assets/media/images/landing/books.svg" alt="Ilustração" class="select-none">
                </div>
            </div>
        </section>

        <section class="bg-[#3B5F4A] py-20 px-6 font-['Inder'] 2xl:rounded-3xl">
            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="bg-white rounded-lg p-6 text-center shadow">
                    <p class="font-semibold pt-3 pb-12 text-2xl">Vídeo Aulas</p>
                    <img src="@assets/media/images/landing/video-aula.svg"
                        class="mx-auto mb-4 size-40 select-none" />
                </div>
                <div class="bg-white rounded-lg p-6 text-2xl text-center shadow">
                    <p class="font-semibold pt-3  pb-12">Chat interativo</p>
                    <img src="@assets/media/images/landing/chat.svg" class="mx-auto mb-4 size-40 select-none" />
                </div>
                <div class="bg-white rounded-lg p-6 text-2xl text-center shadow">
                    <p class="font-semibold pt-3 pb-12">Vídeo Chamada</p>
                    <img src="@assets/media/images/landing/video-chamada.svg"
                        class="mx-auto mb-4 size-40 select-none" />
                </div>
            </div>
        </section>
    </main>
    <Footer />
</template>