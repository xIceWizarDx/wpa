<script setup lang="ts">
import AppLogoIcon from '@/components/AppLogoIcon.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Welcome" />
    <div class="flex min-h-svh flex-col items-center justify-center bg-background p-6 text-foreground">
        <div class="flex max-w-2xl flex-col items-center gap-6 text-center">
            <AppLogoIcon class="size-16 text-primary" />
            <h1 class="text-3xl font-bold">Bem-vindo ao FinancePro</h1>
            <p class="text-base text-muted-foreground">
                Plataforma completa para gestão das suas finanças. Registre despesas e receitas, acompanhe seus investimentos e visualize relatórios
                detalhados em um único lugar.
            </p>
            <ul class="list-disc space-y-1 pl-4 text-left">
                <li>Dashboard com gráficos em tempo real</li>
                <li>Categorização de transações e contas</li>
                <li>Metas financeiras e alertas de vencimento</li>
                <li>Exportação de relatórios em PDF ou Excel</li>
            </ul>
            <div class="flex gap-4 pt-4">
                <Link
                    v-if="$page.props.auth.user"
                    :href="route('dashboard')"
                    class="rounded-md bg-primary px-5 py-2 text-primary-foreground hover:bg-primary/90"
                >
                    Acessar painel
                </Link>
                <template v-else>
                    <Link :href="route('login')" class="rounded-md bg-primary px-5 py-2 text-primary-foreground hover:bg-primary/90"> Entrar </Link>
                    <Link
                        :href="route('register')"
                        class="rounded-md border border-primary px-5 py-2 text-primary hover:bg-primary hover:text-primary-foreground"
                    >
                        Registrar
                    </Link>
                </template>
            </div>
        </div>
    </div>
</template>
