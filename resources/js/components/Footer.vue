<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
</script>
<template>
    <footer id="sobre" class="relative w-full min-w-full max-w-2xl px-6 py-8 text-black">
        <div class="flex items-center gap-6 py-8 justify-center">
            <Link :href="route('home')">
            <img src="@assets/media/logo.svg" alt="Logo" class="w-24 h-24 rounded-full select-none" />
            </Link>
        </div>

        <div class="text-center text-base md:text-xl">
            <div class="flex justify-center gap-6">
                <Link href="/sobre" class="hover:underline">Sobre</Link>|
                <Link href="/contato" class="hover:underline">Segurança de dados</Link>|
                <Link href="/politica-de-privacidade" class="hover:underline">Termos</Link>
            </div>
        </div>
        <div class="py-4 text-center text-base md:text-xl">Todos os direitos reservados a e - DC</div>
    </footer>
</template>