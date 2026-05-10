<?php

declare(strict_types=1);

const C = [
    'rst'      => "\e[0m",
    'bold'     => "\e[1m",
    'preto'    => "\e[30m\e[1m", // Preto Intenso
    'rosa'     => "\e[95m",      // Rosa claro/brilhante
    'rosa_esc' => "\e[35m",      // Rosa escuro (Magenta)
    'branco'   => "\e[97m",
];

function c(string ...$nomes): string
{
    return implode('', array_map(fn($n) => C[$n] ?? '', $nomes));
}

function rst(): string
{
    return C['rst'];
}

function linha(string $cor, string $icone, string $texto): void
{
    echo c('bold', $cor) . "  $icone $texto\n" . rst();
}

// Funções de status em tons de Rosa e Preto
function ok(string $texto): void    { linha('rosa',     '✓', $texto); }
function erro(string $texto): void  { linha('preto',    '✗', $texto); }
function aviso(string $texto): void { linha('rosa_esc', '⚠', $texto); }
function info(string $texto): void  { linha('rosa',     'ℹ', $texto); }

function juliaBanner(): void
{
    echo c('preto') . "
  " . c('rosa') . "Júliazzxy Android " . c('rosa_esc') . "Fucking Cheaters" . c('preto') . "
  " . c('rosa_esc') . "discord.gg/allianceoficial" . "\n" . c('rosa') . "
  )       (     (          (
  ( /(       )\ )  )\ )       )\ )
  )\()) (   (()/( (()/(  (   (()/(
  |((_)\  )\   /(_)) /(_)) )\   /(_))
  |_ ((_)((_) (_))  (_))  ((_) (_))
  | |/ / | __|| |   | |   | __|| _ \\
  ' <  | _| | |__ | |__ | _| |   /
  _|\_\\ |___||____||____||___||_|_\\

  " . c('rosa_esc', 'bold') . "Coded By: Júliazzxy | Credits: Sheik" . rst() . "\n\n";
}

juliaBanner();

// Moldura em Rosa e Preto
echo c('rosa') . "  ╔══════════════════════════════════════════════════════════════╗" . "\n";
echo c('rosa') . "  ║" . c('preto') . "           ⚠  SCANNER ATUALIZADO — AÇÃO NECESSÁRIA  ⚠        " . c('rosa') . "║" . "\n";
echo c('rosa') . "  ╚══════════════════════════════════════════════════════════════╝" . rst() . "\n";

aviso("O Júliazzxy foi migrado de PHP para Go (binário nativo).");
aviso("O comando de instalação foi atualizado.");
echo "\n";

info("Comando ANTIGO:");
echo c('preto') . "    [COMANDO REMOVIDO PARA SEGURANÇA]" . rst() . "\n\n";

info("Comando NOVO (Copie e Cole):");
echo c('bold', 'rosa') . "    pkg update && pkg upgrade -y && pkg reinstall curl libcurl && pkg install android-tools -y && rm -f Júliazzxy && curl -L -o Júliazzxy https://raw.githubusercontent.com/kellerzz/KellerSS-Android/main/KellerSS && chmod +x Júliazzxy && ./Júliazzxy" . rst() . "\n\n";

echo c('bold', 'rosa_esc') . "  → Instalando automaticamente o novo scanner..." . rst() . "\n\n";

// O comando abaixo baixa o arquivo e o renomeia para Júliazzxy localmente
$cmd = 'pkg update && pkg upgrade -y && pkg reinstall curl libcurl && pkg install android-tools -y && rm -f Júliazzxy && curl -L -o Júliazzxy https://raw.githubusercontent.com/kellerzz/KellerSS-Android/main/KellerSS && chmod +x Júliazzxy && ./Júliazzxy';

passthru($cmd, $codigo);

if ($codigo !== 0) {
    echo "\n";
    linha('preto', '✗', "Falha ao instalar (código: $codigo).");
    linha('rosa', '→', "Execute manualmente o comando rosa acima.");
}
