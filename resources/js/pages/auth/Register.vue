<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import AuthBase from '@/layouts/AuthLayout.vue';
import { Link, Form, Head } from '@inertiajs/vue3';
import { LoaderCircle, User, Mail, Lock } from 'lucide-vue-next';
</script>

<template>

    <AuthBase title="Crie uma conta" description="Insira suas informações pessoais para criar a conta.">

        <Head title="Criar conta" />

        <Form method="post" :action="route('register')" :reset-on-success="['password', 'password_confirmation']"
            v-slot="{ errors, processing }" class="flex flex-col gap-6">
            <div class="grid gap-6">
                <div class="relative">
                    <User class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-muted-foreground" />

                    <Input id="name" type="text" required autofocus :tabindex="1" autocomplete="name" name="name"
                        placeholder=" " class="peer pl-10" />

                    <label for="name"
                        class="hover:cursor-text absolute bg-background left-10 top-1/2 -translate-y-1/2 text-sm text-muted-foreground transition-all
                peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-placeholder-shown:text-muted-foreground
                peer-focus:top-0 peer-focus:text-xs peer-focus:text-primary
                peer-not-placeholder-shown:top-0 peer-not-placeholder-shown:text-xs peer-not-placeholder-shown:text-foreground">
                        <span class="black:bg-input/30 px-1 block">Nome</span>
                    </label>

                    <InputError :message="errors.name" />
                </div>

                <div class="relative">
                    <Mail class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-muted-foreground" />
                    <Input id="email" type="email" required :tabindex="2" autocomplete="email" name="email"
                        placeholder=" " class="peer pl-10" />
                    <label for="email"
                        class="hover:cursor-text absolute bg-background left-10 top-1/2 -translate-y-1/2 text-sm text-muted-foreground transition-all
                peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-placeholder-shown:text-muted-foreground
                peer-focus:top-0 peer-focus:text-xs peer-focus:text-primary
                peer-not-placeholder-shown:top-0 peer-not-placeholder-shown:text-xs peer-not-placeholder-shown:text-foreground">
                        <span class="black:bg-input/30 px-1 block">Email</span>
                    </label>
                    <InputError :message="errors.email" />
                </div>

                <div class="relative">
                    <Lock class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-muted-foreground" />
                    <Input id="password" type="password" required :tabindex="3" autocomplete="new-password"
                        name="password" placeholder=" " class="peer pl-10" />
                    <label for="password"
                        class="hover:cursor-text absolute bg-background left-10 top-1/2 -translate-y-1/2 text-sm text-muted-foreground transition-all
                peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-placeholder-shown:text-muted-foreground
                peer-focus:top-0 peer-focus:text-xs peer-focus:text-primary
                peer-not-placeholder-shown:top-0 peer-not-placeholder-shown:text-xs peer-not-placeholder-shown:text-foreground">
                        <span class="black:bg-input/30 px-1 block">Senha</span>
                    </label>
                    <InputError :message="errors.password" />
                </div>

                <div class="relative">
                    <Lock class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-muted-foreground" />
                    <Input id="password_confirmation" type="password" required :tabindex="4" autocomplete="new-password"
                        name="password_confirmation" placeholder=" " class="peer pl-10" />
                    <label for="password_confirmation"
                        class="hover:cursor-text absolute bg-background left-10 top-1/2 -translate-y-1/2 text-sm text-muted-foreground transition-all
                peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-placeholder-shown:text-muted-foreground
                peer-focus:top-0 peer-focus:text-xs peer-focus:text-primary
                peer-not-placeholder-shown:top-0 peer-not-placeholder-shown:text-xs peer-not-placeholder-shown:text-foreground">
                        <span class="black:bg-input/30 px-1 block">Confirmar Senha</span>
                    </label>
                    <InputError :message="errors.password_confirmation" />
                </div>

                <Button type="submit"
                    class="w-full mt-2 flex items-center justify-center gap-2 cursor-pointer hover:bg-primary/80"
                    tabindex="5" :disabled="processing">
                    <LoaderCircle v-if="processing" class="w-4 h-4 animate-spin" />
                    <span>Cadastrar</span>
                </Button>
            </div>

            <div class="text-sm text-center text-muted-foreground">
                Já tem uma conta?
                <TextLink :href="route('login')" class="underline underline-offset-4 hover:text-primary" :tabindex="6">
                    Entrar
                </TextLink>
            </div>
        </Form>
        <template #login-button>
            <Link :href="route('login')"
                class="px-6 py-3 rounded-lg bg-white font-semibold hover:bg-gray-100 w-full sm:w-auto text-center border border-white/50">
            <span class="bg-clip-text text-transparent"
                style="background-image: linear-gradient(90deg, var(--primary-gradient), var(--secondary-gradient));">
                Entrar
            </span>
            </Link>
        </template>
    </AuthBase>
</template>
