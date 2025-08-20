<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
import { Checkbox } from '@/components/ui/checkbox';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import AuthBase from '@/layouts/AuthLayout.vue';
import { Link, Form, Head } from '@inertiajs/vue3';
import { LoaderCircle, Mail, Lock } from 'lucide-vue-next';

defineProps<{
    status?: string;
    canResetPassword: boolean;
}>();
</script>

<template>
    <AuthBase title="Bem vindo de volta!" description="Para continuar conectado conosco, faça login com suas informações pessoais.">

        <Head title="Entrar" />

        <div v-if="status" class="mb-4 text-sm font-medium text-center text-green-600">
            {{ status }}
        </div>

        <Form method="post" :action="route('login')" :reset-on-success="['password']" v-slot="{ errors, processing }"
            class="flex flex-col gap-6">

            <div class="grid gap-6">
                <div class="relative">
                    <Mail class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-muted-foreground" />
                    <Input id="email" type="email" name="email" required autofocus :tabindex="1" autocomplete="email"
                        placeholder=" " class="peer pl-10 bg-input/30" />
                    <label for="email"
                        class="hover:cursor-text absolute bg-background left-10 top-1/2 -translate-y-1/2 text-sm text-muted-foreground transition-all
                peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-placeholder-shown:text-muted-foreground
                peer-focus:top-0 peer-focus:text-xs peer-focus:text-primary
                peer-not-placeholder-shown:top-0 peer-not-placeholder-shown:text-xs peer-not-placeholder-shown:text-foreground">
                        <span class="bg-input/30 px-1 block select-none">Email</span>
                    </label>
                    <InputError :message="errors.email" />
                </div>

                <div class="relative">
                    <Lock class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-muted-foreground" />
                    <Input id="password" type="password" name="password" required :tabindex="2"
                        autocomplete="current-password" placeholder=" " class="peer pl-10 bg-input/30" />
                    <label for="password"
                        class="hover:cursor-text absolute bg-background left-10 top-1/2 -translate-y-1/2 text-sm text-muted-foreground transition-all
                peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-placeholder-shown:text-muted-foreground
                peer-focus:top-0 peer-focus:text-xs peer-focus:text-primary
                peer-not-placeholder-shown:top-0 peer-not-placeholder-shown:text-xs peer-not-placeholder-shown:text-foreground">
                        <span class="bg-input/30 px-1 block select-none">Senha</span>
                    </label>
                    <InputError :message="errors.password" />

                    <TextLink v-if="canResetPassword" :href="route('password.request')"
                        class="absolute right-3 top-1/2 -translate-y-1/2 text-sm text-primary no-underline hover:underline"
                        :tabindex="5">
                        Esqueceu?
                    </TextLink>
                </div>

                <Label for="remember" class="flex items-center space-x-3 hover:cursor-pointer">
                    <Checkbox id="remember" name="remember" :tabindex="3" />
                    <span>Lembre de mim</span>
                </Label>

                <Button type="submit"
                    class="w-full mt-2 flex items-center justify-center gap-2 cursor-pointer hover:bg-primary/80"
                    :tabindex="4" :disabled="processing">
                    <LoaderCircle v-if="processing" class="w-4 h-4 animate-spin" />
                    <span>Entrar</span>
                </Button>
            </div>

            <div class="text-sm text-center text-muted-foreground">
                Não tem uma conta?
                <TextLink :href="route('register')" class="underline underline-offset-4 hover:text-primary" :tabindex="6">
                    Criar conta
                </TextLink>
            </div>
        </Form>

        <template #login-button>
            <Link :href="route('register')"
                class="px-6 py-3 rounded-lg bg-white font-semibold hover:bg-gray-100 w-full sm:w-auto text-center border border-white/50">
            <span class="bg-clip-text text-transparent"
                style="background-image: linear-gradient(90deg, var(--primary-gradient), var(--secondary-gradient));">
                Criar conta
            </span>
            </Link>
        </template>
    </AuthBase>
</template>
