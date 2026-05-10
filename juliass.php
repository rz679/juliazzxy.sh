<?php
declare(strict_types=1);

const C = [
    'rst'       => "\e[0m",
    'bold'      => "\e[1m",
    'preto'     => "\e[30m\e[1m",
    'rosa'      => "\e[95m",      // Rosa claro
    'rosa_esc'  => "\e[35m",      // Rosa escuro
    'branco'    => "\e[97m",
];

function c(string ...$nomes): string {
    return implode('', array_map(fn($n) => C[$n] ?? '', $nomes));
}

function rst(): string {
    return C['rst'];
}

function linha(string $cor, string $icone, string $texto): void {
    echo c('bold', $cor) . "  $icone $texto\n" . rst();
}

function ok(string $texto): void    { linha('rosa',     '✓', $texto); }
function erro(string $texto): void  { linha('preto',    '✗', $texto); }
function aviso(string $texto): void { linha('rosa_esc', '⚠', $texto); }
function info(string $texto): void  { linha('rosa',     'ℹ', $texto); }

function juliaBanner(): void {
    echo c('preto') . "
   " . c('rosa') . "JÚLIAZZXY" . c('rosa_esc') . "  •  SCANNER ANDROID" . c('preto') . "
   " . c('rosa_esc') . "discord.gg/allianceoficial\n" . c('rosa') . "

" . c('rosa_esc', 'bold') . "
   Coded By: Júliazzxy | Tema: Rosa & Preto
" . rst() . "\n";
}

juliaBanner();

echo c('rosa') . "  ╔══════════════════════════════════════════════════════════════╗" . "\n";
echo c('rosa') . "  ║" . c('preto') . "              JÚLIAZZXY SCANNER - INICIANDO               " . c('rosa') . "║" . "\n";
echo c('rosa') . "  ╚══════════════════════════════════════════════════════════════╝" . rst() . "\n\n";

info("Iniciando verificações no dispositivo...");

// === Aqui você pode adicionar as funções de scan (exemplo básico) ===
echo "\n";
ok("Free Fire instalado");
ok("Verificação de Root");
aviso("Verificando Shaders / Wallhack");
ok("Verificação de OBB");
erro("Passagem de Replay detectada");
aviso("Dispositivo reiniciado há menos de 60 minutos");

echo "\n";
echo c('bold', 'rosa') . "🔍 Scan finalizado! Logs salvos na pasta Júliazzxy_Logs\n" . rst();

echo c('rosa_esc') . "\nAgradecimentos especiais à comunidade Free Fire ❤️\n" . rst();
