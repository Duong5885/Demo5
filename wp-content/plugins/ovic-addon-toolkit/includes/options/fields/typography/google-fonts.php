<?php if (!defined('ABSPATH')) {
    die;
} // Cannot access directly.

if (!function_exists('ovic_get_google_fonts')) {
    function ovic_get_google_fonts()
    {
        return [
            'ABeeZee'                        => [['normal', 'italic'], ['latin']],
            'Abel'                           => [['normal'], ['latin']],
            'Abhaya Libre'                   => [
                ['normal', '500', '600', '700', '800'],
                ['latin-ext', 'latin', 'sinhala']
            ],
            'Abril Fatface'                  => [['normal'], ['latin-ext', 'latin']],
            'Aclonica'                       => [['normal'], ['latin']],
            'Acme'                           => [['normal'], ['latin']],
            'Actor'                          => [['normal'], ['latin']],
            'Adamina'                        => [['normal'], ['latin']],
            'Advent Pro'                     => [
                ['100', '200', '300', 'normal', '500', '600', '700'],
                ['latin-ext', 'greek', 'latin']
            ],
            'Aguafina Script'                => [['normal'], ['latin-ext', 'latin']],
            'Akronim'                        => [['normal'], ['latin-ext', 'latin']],
            'Aladin'                         => [['normal'], ['latin-ext', 'latin']],
            'Alata'                          => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Alatsi'                         => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Aldrich'                        => [['normal'], ['latin']],
            'Alef'                           => [['normal', '700'], ['hebrew', 'latin']],
            'Alegreya'                       => [
                [
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'greek', 'latin', 'vietnamese']
            ],
            'Alegreya SC'                    => [
                [
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'greek', 'latin', 'vietnamese']
            ],
            'Alegreya Sans'                  => [
                [
                    '100',
                    '100italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'greek', 'latin', 'vietnamese']
            ],
            'Alegreya Sans SC'               => [
                [
                    '100',
                    '100italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'greek', 'latin', 'vietnamese']
            ],
            'Aleo'                           => [
                ['300', '300italic', 'normal', 'italic', '700', '700italic'],
                ['latin-ext', 'latin']
            ],
            'Alex Brush'                     => [['normal'], ['latin-ext', 'latin']],
            'Alfa Slab One'                  => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Alice'                          => [['normal'], ['cyrillic-ext', 'cyrillic', 'latin']],
            'Alike'                          => [['normal'], ['latin']],
            'Alike Angular'                  => [['normal'], ['latin']],
            'Allan'                          => [['normal', '700'], ['latin-ext', 'latin']],
            'Allerta'                        => [['normal'], ['latin']],
            'Allerta Stencil'                => [['normal'], ['latin']],
            'Allura'                         => [['normal'], ['latin-ext', 'latin']],
            'Almarai'                        => [['300', 'normal', '700', '800'], ['arabic']],
            'Almendra'                       => [
                ['normal', 'italic', '700', '700italic'],
                ['latin-ext', 'latin']
            ],
            'Almendra Display'               => [['normal'], ['latin-ext', 'latin']],
            'Almendra SC'                    => [['normal'], ['latin']],
            'Amarante'                       => [['normal'], ['latin-ext', 'latin']],
            'Amaranth'                       => [['normal', 'italic', '700', '700italic'], ['latin']],
            'Amatic SC'                      => [
                ['normal', '700'],
                ['cyrillic', 'latin-ext', 'hebrew', 'latin', 'vietnamese']
            ],
            'Amethysta'                      => [['normal'], ['latin']],
            'Amiko'                          => [['normal', '600', '700'], ['latin-ext', 'devanagari', 'latin']],
            'Amiri'                          => [
                ['normal', 'italic', '700', '700italic'],
                ['arabic', 'latin-ext', 'latin']
            ],
            'Amita'                          => [['normal', '700'], ['latin-ext', 'devanagari', 'latin']],
            'Anaheim'                        => [['normal'], ['latin-ext', 'latin']],
            'Andada'                         => [['normal'], ['latin-ext', 'latin']],
            'Andika'                         => [
                ['normal'],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Angkor'                         => [['normal'], ['khmer']],
            'Annie Use Your Telescope'       => [['normal'], ['latin']],
            'Anonymous Pro'                  => [
                ['normal', 'italic', '700', '700italic'],
                ['cyrillic', 'latin-ext', 'greek', 'latin']
            ],
            'Antic'                          => [['normal'], ['latin']],
            'Antic Didone'                   => [['normal'], ['latin']],
            'Antic Slab'                     => [['normal'], ['latin']],
            'Anton'                          => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Arapey'                         => [['normal', 'italic'], ['latin']],
            'Arbutus'                        => [['normal'], ['latin-ext', 'latin']],
            'Arbutus Slab'                   => [['normal'], ['latin-ext', 'latin']],
            'Architects Daughter'            => [['normal'], ['latin']],
            'Archivo'                        => [
                [
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Archivo Black'                  => [['normal'], ['latin-ext', 'latin']],
            'Archivo Narrow'                 => [
                [
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Aref Ruqaa'                     => [['normal', '700'], ['arabic', 'latin']],
            'Arima Madurai'                  => [
                ['100', '200', '300', 'normal', '500', '700', '800', '900'],
                ['latin-ext', 'latin', 'vietnamese', 'tamil']
            ],
            'Arimo'                          => [
                ['normal', 'italic', '700', '700italic'],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'hebrew', 'greek', 'latin', 'vietnamese']
            ],
            'Arizonia'                       => [['normal'], ['latin-ext', 'latin']],
            'Armata'                         => [['normal'], ['latin-ext', 'latin']],
            'Arsenal'                        => [
                ['normal', 'italic', '700', '700italic'],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Artifika'                       => [['normal'], ['latin']],
            'Arvo'                           => [['normal', 'italic', '700', '700italic'], ['latin']],
            'Arya'                           => [['normal', '700'], ['latin-ext', 'devanagari', 'latin']],
            'Asap'                           => [
                [
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Asap Condensed'                 => [
                [
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Asar'                           => [['normal'], ['latin-ext', 'devanagari', 'latin']],
            'Asset'                          => [['normal'], ['latin']],
            'Assistant'                      => [
                ['200', '300', 'normal', '600', '700', '800'],
                ['hebrew', 'latin']
            ],
            'Astloch'                        => [['normal', '700'], ['latin']],
            'Asul'                           => [['normal', '700'], ['latin']],
            'Athiti'                         => [
                ['200', '300', 'normal', '500', '600', '700'],
                ['latin-ext', 'latin', 'thai', 'vietnamese']
            ],
            'Atma'                           => [
                ['300', 'normal', '500', '600', '700'],
                ['bengali', 'latin-ext', 'latin']
            ],
            'Atomic Age'                     => [['normal'], ['latin']],
            'Aubrey'                         => [['normal'], ['latin']],
            'Audiowide'                      => [['normal'], ['latin-ext', 'latin']],
            'Autour One'                     => [['normal'], ['latin-ext', 'latin']],
            'Average'                        => [['normal'], ['latin-ext', 'latin']],
            'Average Sans'                   => [['normal'], ['latin-ext', 'latin']],
            'Averia Gruesa Libre'            => [['normal'], ['latin-ext', 'latin']],
            'Averia Libre'                   => [
                ['300', '300italic', 'normal', 'italic', '700', '700italic'],
                ['latin']
            ],
            'Averia Sans Libre'              => [
                ['300', '300italic', 'normal', 'italic', '700', '700italic'],
                ['latin']
            ],
            'Averia Serif Libre'             => [
                ['300', '300italic', 'normal', 'italic', '700', '700italic'],
                ['latin']
            ],
            'B612'                           => [['normal', 'italic', '700', '700italic'], ['latin']],
            'B612 Mono'                      => [['normal', 'italic', '700', '700italic'], ['latin']],
            'Bad Script'                     => [['normal'], ['cyrillic', 'latin']],
            'Bahiana'                        => [['normal'], ['latin-ext', 'latin']],
            'Bahianita'                      => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Bai Jamjuree'                   => [
                [
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['latin-ext', 'latin', 'thai', 'vietnamese']
            ],
            'Baloo'                          => [['normal'], ['latin-ext', 'devanagari', 'latin', 'vietnamese']],
            'Baloo Bhai'                     => [['normal'], ['latin-ext', 'latin', 'vietnamese', 'gujarati']],
            'Baloo Bhaijaan'                 => [['normal'], ['arabic', 'latin-ext', 'latin', 'vietnamese']],
            'Baloo Bhaina'                   => [['normal'], ['latin-ext', 'latin', 'vietnamese', 'oriya']],
            'Baloo Chettan'                  => [['normal'], ['malayalam', 'latin-ext', 'latin', 'vietnamese']],
            'Baloo Da'                       => [['normal'], ['bengali', 'latin-ext', 'latin', 'vietnamese']],
            'Baloo Paaji'                    => [['normal'], ['latin-ext', 'latin', 'vietnamese', 'gurmukhi']],
            'Baloo Tamma'                    => [['normal'], ['latin-ext', 'kannada', 'latin', 'vietnamese']],
            'Baloo Tammudu'                  => [['normal'], ['telugu', 'latin-ext', 'latin', 'vietnamese']],
            'Baloo Thambi'                   => [['normal'], ['latin-ext', 'latin', 'vietnamese', 'tamil']],
            'Balthazar'                      => [['normal'], ['latin']],
            'Bangers'                        => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Barlow'                         => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Barlow Condensed'               => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Barlow Semi Condensed'          => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Barriecito'                     => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Barrio'                         => [['normal'], ['latin-ext', 'latin']],
            'Basic'                          => [['normal'], ['latin-ext', 'latin']],
            'Baskervville'                   => [['normal', 'italic'], ['latin-ext', 'latin']],
            'Battambang'                     => [['normal', '700'], ['khmer']],
            'Baumans'                        => [['normal'], ['latin']],
            'Bayon'                          => [['normal'], ['khmer']],
            'Be Vietnam'                     => [
                [
                    '100',
                    '100italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic'
                ],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Bebas Neue'                     => [['normal'], ['latin-ext', 'latin']],
            'Belgrano'                       => [['normal'], ['latin']],
            'Bellefair'                      => [['normal'], ['latin-ext', 'hebrew', 'latin']],
            'Belleza'                        => [['normal'], ['latin-ext', 'latin']],
            'BenchNine'                      => [['300', 'normal', '700'], ['latin-ext', 'latin']],
            'Bentham'                        => [['normal'], ['latin']],
            'Berkshire Swash'                => [['normal'], ['latin-ext', 'latin']],
            'Beth Ellen'                     => [['normal'], ['latin']],
            'Bevan'                          => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Big Shoulders Display'          => [
                ['100', '300', 'normal', '500', '600', '700', '800', '900'],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Big Shoulders Text'             => [
                ['100', '300', 'normal', '500', '600', '700', '800', '900'],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Bigelow Rules'                  => [['normal'], ['latin-ext', 'latin']],
            'Bigshot One'                    => [['normal'], ['latin']],
            'Bilbo'                          => [['normal'], ['latin-ext', 'latin']],
            'Bilbo Swash Caps'               => [['normal'], ['latin-ext', 'latin']],
            'BioRhyme'                       => [['200', '300', 'normal', '700', '800'], ['latin-ext', 'latin']],
            'BioRhyme Expanded'              => [['200', '300', 'normal', '700', '800'], ['latin-ext', 'latin']],
            'Biryani'                        => [
                ['200', '300', 'normal', '600', '700', '800', '900'],
                ['latin-ext', 'devanagari', 'latin']
            ],
            'Bitter'                         => [['normal', 'italic', '700'], ['latin-ext', 'latin']],
            'Black And White Picture'        => [['normal'], ['korean', 'latin']],
            'Black Han Sans'                 => [['normal'], ['korean', 'latin']],
            'Black Ops One'                  => [['normal'], ['latin-ext', 'latin']],
            'Blinker'                        => [
                ['100', '200', '300', 'normal', '600', '700', '800', '900'],
                ['latin-ext', 'latin']
            ],
            'Bokor'                          => [['normal'], ['khmer']],
            'Bonbon'                         => [['normal'], ['latin']],
            'Boogaloo'                       => [['normal'], ['latin']],
            'Bowlby One'                     => [['normal'], ['latin']],
            'Bowlby One SC'                  => [['normal'], ['latin-ext', 'latin']],
            'Brawler'                        => [['normal'], ['latin']],
            'Bree Serif'                     => [['normal'], ['latin-ext', 'latin']],
            'Bubblegum Sans'                 => [['normal'], ['latin-ext', 'latin']],
            'Bubbler One'                    => [['normal'], ['latin-ext', 'latin']],
            'Buda'                           => [['300'], ['latin']],
            'Buenard'                        => [['normal', '700'], ['latin-ext', 'latin']],
            'Bungee'                         => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Bungee Hairline'                => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Bungee Inline'                  => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Bungee Outline'                 => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Bungee Shade'                   => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Butcherman'                     => [['normal'], ['latin-ext', 'latin']],
            'Butterfly Kids'                 => [['normal'], ['latin-ext', 'latin']],
            'Cabin'                          => [
                [
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Cabin Condensed'                => [
                ['normal', '500', '600', '700'],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Cabin Sketch'                   => [['normal', '700'], ['latin']],
            'Caesar Dressing'                => [['normal'], ['latin']],
            'Cagliostro'                     => [['normal'], ['latin']],
            'Cairo'                          => [
                ['200', '300', 'normal', '600', '700', '900'],
                ['arabic', 'latin-ext', 'latin']
            ],
            'Calistoga'                      => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Calligraffitti'                 => [['normal'], ['latin']],
            'Cambay'                         => [
                ['normal', 'italic', '700', '700italic'],
                ['latin-ext', 'devanagari', 'latin']
            ],
            'Cambo'                          => [['normal'], ['latin']],
            'Candal'                         => [['normal'], ['latin']],
            'Cantarell'                      => [['normal', 'italic', '700', '700italic'], ['latin']],
            'Cantata One'                    => [['normal'], ['latin-ext', 'latin']],
            'Cantora One'                    => [['normal'], ['latin-ext', 'latin']],
            'Capriola'                       => [['normal'], ['latin-ext', 'latin']],
            'Cardo'                          => [
                ['normal', 'italic', '700'],
                ['greek-ext', 'latin-ext', 'greek', 'latin']
            ],
            'Carme'                          => [['normal'], ['latin']],
            'Carrois Gothic'                 => [['normal'], ['latin']],
            'Carrois Gothic SC'              => [['normal'], ['latin']],
            'Carter One'                     => [['normal'], ['latin']],
            'Catamaran'                      => [
                ['100', '200', '300', 'normal', '500', '600', '700', '800', '900'],
                ['latin-ext', 'latin', 'tamil']
            ],
            'Caudex'                         => [
                ['normal', 'italic', '700', '700italic'],
                ['greek-ext', 'latin-ext', 'greek', 'latin']
            ],
            'Caveat'                         => [
                ['normal', '700'],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin']
            ],
            'Caveat Brush'                   => [['normal'], ['latin-ext', 'latin']],
            'Cedarville Cursive'             => [['normal'], ['latin']],
            'Ceviche One'                    => [['normal'], ['latin-ext', 'latin']],
            'Chakra Petch'                   => [
                [
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['latin-ext', 'latin', 'thai', 'vietnamese']
            ],
            'Changa'                         => [
                ['200', '300', 'normal', '500', '600', '700', '800'],
                ['arabic', 'latin-ext', 'latin']
            ],
            'Changa One'                     => [['normal', 'italic'], ['latin']],
            'Chango'                         => [['normal'], ['latin-ext', 'latin']],
            'Charm'                          => [['normal', '700'], ['latin-ext', 'latin', 'thai', 'vietnamese']],
            'Charmonman'                     => [['normal', '700'], ['latin-ext', 'latin', 'thai', 'vietnamese']],
            'Chathura'                       => [['100', '300', 'normal', '700', '800'], ['telugu', 'latin']],
            'Chau Philomene One'             => [['normal', 'italic'], ['latin-ext', 'latin']],
            'Chela One'                      => [['normal'], ['latin-ext', 'latin']],
            'Chelsea Market'                 => [['normal'], ['latin-ext', 'latin']],
            'Chenla'                         => [['normal'], ['khmer']],
            'Cherry Cream Soda'              => [['normal'], ['latin']],
            'Cherry Swash'                   => [['normal', '700'], ['latin-ext', 'latin']],
            'Chewy'                          => [['normal'], ['latin']],
            'Chicle'                         => [['normal'], ['latin-ext', 'latin']],
            'Chilanka'                       => [['normal'], ['malayalam', 'latin']],
            'Chivo'                          => [
                [
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '700',
                    '700italic',
                    '900',
                    '900italic'
                ],
                ['latin-ext', 'latin']
            ],
            'Chonburi'                       => [['normal'], ['latin-ext', 'latin', 'thai', 'vietnamese']],
            'Cinzel'                         => [['normal', '700', '900'], ['latin-ext', 'latin']],
            'Cinzel Decorative'              => [['normal', '700', '900'], ['latin']],
            'Clicker Script'                 => [['normal'], ['latin-ext', 'latin']],
            'Coda'                           => [['normal', '800'], ['latin-ext', 'latin']],
            'Coda Caption'                   => [['800'], ['latin-ext', 'latin']],
            'Codystar'                       => [['300', 'normal'], ['latin-ext', 'latin']],
            'Coiny'                          => [['normal'], ['latin-ext', 'latin', 'vietnamese', 'tamil']],
            'Combo'                          => [['normal'], ['latin-ext', 'latin']],
            'Comfortaa'                      => [
                ['300', 'normal', '500', '600', '700'],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'greek', 'latin', 'vietnamese']
            ],
            'Coming Soon'                    => [['normal'], ['latin']],
            'Concert One'                    => [['normal'], ['latin-ext', 'latin']],
            'Condiment'                      => [['normal'], ['latin-ext', 'latin']],
            'Content'                        => [['normal', '700'], ['khmer']],
            'Contrail One'                   => [['normal'], ['latin']],
            'Convergence'                    => [['normal'], ['latin']],
            'Cookie'                         => [['normal'], ['latin']],
            'Copse'                          => [['normal'], ['latin']],
            'Corben'                         => [['normal', '700'], ['latin-ext', 'latin']],
            'Cormorant'                      => [
                [
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Cormorant Garamond'             => [
                [
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Cormorant Infant'               => [
                [
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Cormorant SC'                   => [
                ['300', 'normal', '500', '600', '700'],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Cormorant Unicase'              => [
                ['300', 'normal', '500', '600', '700'],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Cormorant Upright'              => [
                ['300', 'normal', '500', '600', '700'],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Courgette'                      => [['normal'], ['latin-ext', 'latin']],
            'Cousine'                        => [
                ['normal', 'italic', '700', '700italic'],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'hebrew', 'greek', 'latin', 'vietnamese']
            ],
            'Coustard'                       => [['normal', '900'], ['latin']],
            'Covered By Your Grace'          => [['normal'], ['latin']],
            'Crafty Girls'                   => [['normal'], ['latin']],
            'Creepster'                      => [['normal'], ['latin']],
            'Crete Round'                    => [['normal', 'italic'], ['latin-ext', 'latin']],
            'Crimson Pro'                    => [
                [
                    '200',
                    '300',
                    'normal',
                    '500',
                    '600',
                    '700',
                    '800',
                    '900',
                    '200italic',
                    '300italic',
                    'italic',
                    '500italic',
                    '600italic',
                    '700italic',
                    '800italic',
                    '900italic'
                ],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Crimson Text'                   => [
                ['normal', 'italic', '600', '600italic', '700', '700italic'],
                ['latin']
            ],
            'Croissant One'                  => [['normal'], ['latin-ext', 'latin']],
            'Crushed'                        => [['normal'], ['latin']],
            'Cuprum'                         => [
                ['normal', 'italic', '700', '700italic'],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Cute Font'                      => [['normal'], ['korean', 'latin']],
            'Cutive'                         => [['normal'], ['latin-ext', 'latin']],
            'Cutive Mono'                    => [['normal'], ['latin-ext', 'latin']],
            'DM Sans'                        => [
                ['normal', 'italic', '500', '500italic', '700', '700italic'],
                ['latin-ext', 'latin']
            ],
            'DM Serif Display'               => [['normal', 'italic'], ['latin-ext', 'latin']],
            'DM Serif Text'                  => [['normal', 'italic'], ['latin-ext', 'latin']],
            'Damion'                         => [['normal'], ['latin']],
            'Dancing Script'                 => [
                ['normal', '500', '600', '700'],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Dangrek'                        => [['normal'], ['khmer']],
            'Darker Grotesque'               => [
                ['300', 'normal', '500', '600', '700', '800', '900'],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'David Libre'                    => [
                ['normal', '500', '700'],
                ['latin-ext', 'hebrew', 'latin', 'vietnamese']
            ],
            'Dawning of a New Day'           => [['normal'], ['latin']],
            'Days One'                       => [['normal'], ['latin']],
            'Dekko'                          => [['normal'], ['latin-ext', 'devanagari', 'latin']],
            'Delius'                         => [['normal'], ['latin']],
            'Delius Swash Caps'              => [['normal'], ['latin']],
            'Delius Unicase'                 => [['normal', '700'], ['latin']],
            'Della Respira'                  => [['normal'], ['latin']],
            'Denk One'                       => [['normal'], ['latin-ext', 'latin']],
            'Devonshire'                     => [['normal'], ['latin-ext', 'latin']],
            'Dhurjati'                       => [['normal'], ['telugu', 'latin']],
            'Didact Gothic'                  => [
                ['normal'],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'greek', 'latin']
            ],
            'Diplomata'                      => [['normal'], ['latin-ext', 'latin']],
            'Diplomata SC'                   => [['normal'], ['latin-ext', 'latin']],
            'Do Hyeon'                       => [['normal'], ['korean', 'latin']],
            'Dokdo'                          => [['normal'], ['korean', 'latin']],
            'Domine'                         => [['normal', '700'], ['latin-ext', 'latin']],
            'Donegal One'                    => [['normal'], ['latin-ext', 'latin']],
            'Doppio One'                     => [['normal'], ['latin-ext', 'latin']],
            'Dorsa'                          => [['normal'], ['latin']],
            'Dosis'                          => [
                ['200', '300', 'normal', '500', '600', '700', '800'],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Dr Sugiyama'                    => [['normal'], ['latin-ext', 'latin']],
            'Duru Sans'                      => [['normal'], ['latin-ext', 'latin']],
            'Dynalight'                      => [['normal'], ['latin-ext', 'latin']],
            'EB Garamond'                    => [
                [
                    'normal',
                    '500',
                    '600',
                    '700',
                    '800',
                    'italic',
                    '500italic',
                    '600italic',
                    '700italic',
                    '800italic'
                ],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'greek', 'latin', 'vietnamese']
            ],
            'Eagle Lake'                     => [['normal'], ['latin-ext', 'latin']],
            'East Sea Dokdo'                 => [['normal'], ['korean', 'latin']],
            'Eater'                          => [['normal'], ['latin-ext', 'latin']],
            'Economica'                      => [
                ['normal', 'italic', '700', '700italic'],
                ['latin-ext', 'latin']
            ],
            'Eczar'                          => [
                ['normal', '500', '600', '700', '800'],
                ['latin-ext', 'devanagari', 'latin']
            ],
            'El Messiri'                     => [
                ['normal', '500', '600', '700'],
                ['cyrillic', 'arabic', 'latin']
            ],
            'Electrolize'                    => [['normal'], ['latin']],
            'Elsie'                          => [['normal', '900'], ['latin-ext', 'latin']],
            'Elsie Swash Caps'               => [['normal', '900'], ['latin-ext', 'latin']],
            'Emblema One'                    => [['normal'], ['latin-ext', 'latin']],
            'Emilys Candy'                   => [['normal'], ['latin-ext', 'latin']],
            'Encode Sans'                    => [
                ['100', '200', '300', 'normal', '500', '600', '700', '800', '900'],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Encode Sans Condensed'          => [
                ['100', '200', '300', 'normal', '500', '600', '700', '800', '900'],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Encode Sans Expanded'           => [
                ['100', '200', '300', 'normal', '500', '600', '700', '800', '900'],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Encode Sans Semi Condensed'     => [
                ['100', '200', '300', 'normal', '500', '600', '700', '800', '900'],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Encode Sans Semi Expanded'      => [
                ['100', '200', '300', 'normal', '500', '600', '700', '800', '900'],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Engagement'                     => [['normal'], ['latin']],
            'Englebert'                      => [['normal'], ['latin-ext', 'latin']],
            'Enriqueta'                      => [['normal', '500', '600', '700'], ['latin-ext', 'latin']],
            'Erica One'                      => [['normal'], ['latin-ext', 'latin']],
            'Esteban'                        => [['normal'], ['latin-ext', 'latin']],
            'Euphoria Script'                => [['normal'], ['latin-ext', 'latin']],
            'Ewert'                          => [['normal'], ['latin-ext', 'latin']],
            'Exo'                            => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Exo 2'                          => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Expletus Sans'                  => [
                [
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['latin']
            ],
            'Fahkwang'                       => [
                [
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['latin-ext', 'latin', 'thai', 'vietnamese']
            ],
            'Fanwood Text'                   => [['normal', 'italic'], ['latin']],
            'Farro'                          => [['300', 'normal', '500', '700'], ['latin-ext', 'latin']],
            'Farsan'                         => [['normal'], ['latin-ext', 'latin', 'vietnamese', 'gujarati']],
            'Fascinate'                      => [['normal'], ['latin']],
            'Fascinate Inline'               => [['normal'], ['latin']],
            'Faster One'                     => [['normal'], ['latin']],
            'Fasthand'                       => [['normal'], ['khmer']],
            'Fauna One'                      => [['normal'], ['latin-ext', 'latin']],
            'Faustina'                       => [
                [
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Federant'                       => [['normal'], ['latin']],
            'Federo'                         => [['normal'], ['latin']],
            'Felipa'                         => [['normal'], ['latin-ext', 'latin']],
            'Fenix'                          => [['normal'], ['latin-ext', 'latin']],
            'Finger Paint'                   => [['normal'], ['latin']],
            'Fira Code'                      => [
                ['300', 'normal', '500', '600', '700'],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'greek', 'latin']
            ],
            'Fira Mono'                      => [
                ['normal', '500', '700'],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'greek', 'latin']
            ],
            'Fira Sans'                      => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'greek', 'latin', 'vietnamese']
            ],
            'Fira Sans Condensed'            => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'greek', 'latin', 'vietnamese']
            ],
            'Fira Sans Extra Condensed'      => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'greek', 'latin', 'vietnamese']
            ],
            'Fjalla One'                     => [['normal'], ['latin-ext', 'latin']],
            'Fjord One'                      => [['normal'], ['latin']],
            'Flamenco'                       => [['300', 'normal'], ['latin']],
            'Flavors'                        => [['normal'], ['latin-ext', 'latin']],
            'Fondamento'                     => [['normal', 'italic'], ['latin-ext', 'latin']],
            'Fontdiner Swanky'               => [['normal'], ['latin']],
            'Forum'                          => [['normal'], ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin']],
            'Francois One'                   => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Frank Ruhl Libre'               => [
                ['300', 'normal', '500', '700', '900'],
                ['latin-ext', 'hebrew', 'latin']
            ],
            'Freckle Face'                   => [['normal'], ['latin-ext', 'latin']],
            'Fredericka the Great'           => [['normal'], ['latin-ext', 'latin']],
            'Fredoka One'                    => [['normal'], ['latin']],
            'Freehand'                       => [['normal'], ['khmer']],
            'Fresca'                         => [['normal'], ['latin-ext', 'latin']],
            'Frijole'                        => [['normal'], ['latin']],
            'Fruktur'                        => [['normal'], ['latin-ext', 'latin']],
            'Fugaz One'                      => [['normal'], ['latin']],
            'GFS Didot'                      => [['normal'], ['greek']],
            'GFS Neohellenic'                => [['normal', 'italic', '700', '700italic'], ['greek']],
            'Gabriela'                       => [['normal'], ['cyrillic-ext', 'cyrillic', 'latin']],
            'Gaegu'                          => [['300', 'normal', '700'], ['korean', 'latin']],
            'Gafata'                         => [['normal'], ['latin-ext', 'latin']],
            'Galada'                         => [['normal'], ['bengali', 'latin']],
            'Galdeano'                       => [['normal'], ['latin']],
            'Galindo'                        => [['normal'], ['latin-ext', 'latin']],
            'Gamja Flower'                   => [['normal'], ['korean', 'latin']],
            'Gayathri'                       => [['100', 'normal', '700'], ['malayalam', 'latin']],
            'Gentium Basic'                  => [
                ['normal', 'italic', '700', '700italic'],
                ['latin-ext', 'latin']
            ],
            'Gentium Book Basic'             => [
                ['normal', 'italic', '700', '700italic'],
                ['latin-ext', 'latin']
            ],
            'Geo'                            => [['normal', 'italic'], ['latin']],
            'Geostar'                        => [['normal'], ['latin']],
            'Geostar Fill'                   => [['normal'], ['latin']],
            'Germania One'                   => [['normal'], ['latin']],
            'Gidugu'                         => [['normal'], ['telugu', 'latin']],
            'Gilda Display'                  => [['normal'], ['latin-ext', 'latin']],
            'Give You Glory'                 => [['normal'], ['latin']],
            'Glass Antiqua'                  => [['normal'], ['latin-ext', 'latin']],
            'Glegoo'                         => [['normal', '700'], ['latin-ext', 'devanagari', 'latin']],
            'Gloria Hallelujah'              => [['normal'], ['latin']],
            'Goblin One'                     => [['normal'], ['latin']],
            'Gochi Hand'                     => [['normal'], ['latin']],
            'Gorditas'                       => [['normal', '700'], ['latin']],
            'Gothic A1'                      => [
                ['100', '200', '300', 'normal', '500', '600', '700', '800', '900'],
                ['korean', 'latin']
            ],
            'Goudy Bookletter 1911'          => [['normal'], ['latin']],
            'Graduate'                       => [['normal'], ['latin']],
            'Grand Hotel'                    => [['normal'], ['latin-ext', 'latin']],
            'Gravitas One'                   => [['normal'], ['latin']],
            'Great Vibes'                    => [['normal'], ['latin-ext', 'latin']],
            'Grenze'                         => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Griffy'                         => [['normal'], ['latin-ext', 'latin']],
            'Gruppo'                         => [['normal'], ['latin-ext', 'latin']],
            'Gudea'                          => [['normal', 'italic', '700'], ['latin-ext', 'latin']],
            'Gugi'                           => [['normal'], ['korean', 'latin']],
            'Gupter'                         => [['normal', '500', '700'], ['latin']],
            'Gurajada'                       => [['normal'], ['telugu', 'latin']],
            'Habibi'                         => [['normal'], ['latin-ext', 'latin']],
            'Halant'                         => [
                ['300', 'normal', '500', '600', '700'],
                ['latin-ext', 'devanagari', 'latin']
            ],
            'Hammersmith One'                => [['normal'], ['latin-ext', 'latin']],
            'Hanalei'                        => [['normal'], ['latin-ext', 'latin']],
            'Hanalei Fill'                   => [['normal'], ['latin-ext', 'latin']],
            'Handlee'                        => [['normal'], ['latin']],
            'Hanuman'                        => [['normal', '700'], ['khmer']],
            'Happy Monkey'                   => [['normal'], ['latin-ext', 'latin']],
            'Harmattan'                      => [['normal'], ['arabic', 'latin']],
            'Headland One'                   => [['normal'], ['latin-ext', 'latin']],
            'Heebo'                          => [
                ['100', '300', 'normal', '500', '700', '800', '900'],
                ['hebrew', 'latin']
            ],
            'Henny Penny'                    => [['normal'], ['latin']],
            'Hepta Slab'                     => [
                ['100', '200', '300', 'normal', '500', '600', '700', '800', '900'],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Herr Von Muellerhoff'           => [['normal'], ['latin-ext', 'latin']],
            'Hi Melody'                      => [['normal'], ['korean', 'latin']],
            'Hind'                           => [
                ['300', 'normal', '500', '600', '700'],
                ['latin-ext', 'devanagari', 'latin']
            ],
            'Hind Guntur'                    => [
                ['300', 'normal', '500', '600', '700'],
                ['telugu', 'latin-ext', 'latin']
            ],
            'Hind Madurai'                   => [
                ['300', 'normal', '500', '600', '700'],
                ['latin-ext', 'latin', 'tamil']
            ],
            'Hind Siliguri'                  => [
                ['300', 'normal', '500', '600', '700'],
                ['bengali', 'latin-ext', 'latin']
            ],
            'Hind Vadodara'                  => [
                ['300', 'normal', '500', '600', '700'],
                ['latin-ext', 'latin', 'gujarati']
            ],
            'Holtwood One SC'                => [['normal'], ['latin']],
            'Homemade Apple'                 => [['normal'], ['latin']],
            'Homenaje'                       => [['normal'], ['latin']],
            'IBM Plex Mono'                  => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'IBM Plex Sans'                  => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'greek', 'latin', 'vietnamese']
            ],
            'IBM Plex Sans Condensed'        => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'IBM Plex Serif'                 => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'IM Fell DW Pica'                => [['normal', 'italic'], ['latin']],
            'IM Fell DW Pica SC'             => [['normal'], ['latin']],
            'IM Fell Double Pica'            => [['normal', 'italic'], ['latin']],
            'IM Fell Double Pica SC'         => [['normal'], ['latin']],
            'IM Fell English'                => [['normal', 'italic'], ['latin']],
            'IM Fell English SC'             => [['normal'], ['latin']],
            'IM Fell French Canon'           => [['normal', 'italic'], ['latin']],
            'IM Fell French Canon SC'        => [['normal'], ['latin']],
            'IM Fell Great Primer'           => [['normal', 'italic'], ['latin']],
            'IM Fell Great Primer SC'        => [['normal'], ['latin']],
            'Ibarra Real Nova'               => [
                ['normal', 'italic', '600', '600italic', '700', '700italic'],
                ['latin-ext', 'latin']
            ],
            'Iceberg'                        => [['normal'], ['latin']],
            'Iceland'                        => [['normal'], ['latin']],
            'Imprima'                        => [['normal'], ['latin-ext', 'latin']],
            'Inconsolata'                    => [['normal', '700'], ['latin-ext', 'latin', 'vietnamese']],
            'Inder'                          => [['normal'], ['latin-ext', 'latin']],
            'Indie Flower'                   => [['normal'], ['latin']],
            'Inika'                          => [['normal', '700'], ['latin-ext', 'latin']],
            'Inknut Antiqua'                 => [
                ['300', 'normal', '500', '600', '700', '800', '900'],
                ['latin-ext', 'devanagari', 'latin']
            ],
            'Irish Grover'                   => [['normal'], ['latin']],
            'Istok Web'                      => [
                ['normal', 'italic', '700', '700italic'],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin']
            ],
            'Italiana'                       => [['normal'], ['latin']],
            'Italianno'                      => [['normal'], ['latin-ext', 'latin']],
            'Itim'                           => [['normal'], ['latin-ext', 'latin', 'thai', 'vietnamese']],
            'Jacques Francois'               => [['normal'], ['latin']],
            'Jacques Francois Shadow'        => [['normal'], ['latin']],
            'Jaldi'                          => [['normal', '700'], ['latin-ext', 'devanagari', 'latin']],
            'Jim Nightshade'                 => [['normal'], ['latin-ext', 'latin']],
            'Jockey One'                     => [['normal'], ['latin-ext', 'latin']],
            'Jolly Lodger'                   => [['normal'], ['latin-ext', 'latin']],
            'Jomhuria'                       => [['normal'], ['arabic', 'latin-ext', 'latin']],
            'Jomolhari'                      => [['normal'], ['tibetan', 'latin']],
            'Josefin Sans'                   => [
                [
                    '100',
                    '100italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Josefin Slab'                   => [
                [
                    '100',
                    '100italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['latin']
            ],
            'Jost'                           => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['latin-ext', 'latin', 'thai', 'vietnamese']
            ],
            'Joti One'                       => [['normal'], ['latin-ext', 'latin']],
            'Jua'                            => [['normal'], ['korean', 'latin']],
            'Judson'                         => [
                ['normal', 'italic', '700'],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Julee'                          => [['normal'], ['latin']],
            'Julius Sans One'                => [['normal'], ['latin-ext', 'latin']],
            'Junge'                          => [['normal'], ['latin']],
            'Jura'                           => [
                ['300', 'normal', '500', '600', '700'],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'greek', 'latin', 'vietnamese']
            ],
            'Just Another Hand'              => [['normal'], ['latin']],
            'Just Me Again Down Here'        => [['normal'], ['latin-ext', 'latin']],
            'K2D'                            => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic'
                ],
                ['latin-ext', 'latin', 'thai', 'vietnamese']
            ],
            'Kadwa'                          => [['normal', '700'], ['devanagari', 'latin']],
            'Kalam'                          => [['300', 'normal', '700'], ['latin-ext', 'devanagari', 'latin']],
            'Kameron'                        => [['normal', '700'], ['latin']],
            'Kanit'                          => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['latin-ext', 'latin', 'thai', 'vietnamese']
            ],
            'Kantumruy'                      => [['300', 'normal', '700'], ['khmer']],
            'Karla'                          => [
                ['normal', 'italic', '700', '700italic'],
                ['latin-ext', 'latin']
            ],
            'Karma'                          => [
                ['300', 'normal', '500', '600', '700'],
                ['latin-ext', 'devanagari', 'latin']
            ],
            'Katibeh'                        => [['normal'], ['arabic', 'latin-ext', 'latin']],
            'Kaushan Script'                 => [['normal'], ['latin-ext', 'latin']],
            'Kavivanar'                      => [['normal'], ['latin-ext', 'latin', 'tamil']],
            'Kavoon'                         => [['normal'], ['latin-ext', 'latin']],
            'Kdam Thmor'                     => [['normal'], ['khmer']],
            'Keania One'                     => [['normal'], ['latin-ext', 'latin']],
            'Kelly Slab'                     => [['normal'], ['cyrillic', 'latin-ext', 'latin']],
            'Kenia'                          => [['normal'], ['latin']],
            'Khand'                          => [
                ['300', 'normal', '500', '600', '700'],
                ['latin-ext', 'devanagari', 'latin']
            ],
            'Khmer'                          => [['normal'], ['khmer']],
            'Khula'                          => [
                ['300', 'normal', '600', '700', '800'],
                ['latin-ext', 'devanagari', 'latin']
            ],
            'Kirang Haerang'                 => [['normal'], ['korean', 'latin']],
            'Kite One'                       => [['normal'], ['latin']],
            'Knewave'                        => [['normal'], ['latin-ext', 'latin']],
            'KoHo'                           => [
                [
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['latin-ext', 'latin', 'thai', 'vietnamese']
            ],
            'Kodchasan'                      => [
                [
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['latin-ext', 'latin', 'thai', 'vietnamese']
            ],
            'Kosugi'                         => [['normal'], ['cyrillic', 'latin', 'japanese']],
            'Kosugi Maru'                    => [['normal'], ['cyrillic', 'latin', 'japanese']],
            'Kotta One'                      => [['normal'], ['latin-ext', 'latin']],
            'Koulen'                         => [['normal'], ['khmer']],
            'Kranky'                         => [['normal'], ['latin']],
            'Kreon'                          => [['300', 'normal', '500', '600', '700'], ['latin-ext', 'latin']],
            'Kristi'                         => [['normal'], ['latin']],
            'Krona One'                      => [['normal'], ['latin-ext', 'latin']],
            'Krub'                           => [
                [
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['latin-ext', 'latin', 'thai', 'vietnamese']
            ],
            'Kulim Park'                     => [
                [
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['latin-ext', 'latin']
            ],
            'Kumar One'                      => [['normal'], ['latin-ext', 'latin', 'gujarati']],
            'Kumar One Outline'              => [['normal'], ['latin-ext', 'latin', 'gujarati']],
            'Kurale'                         => [
                ['normal'],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'devanagari', 'latin']
            ],
            'La Belle Aurore'                => [['normal'], ['latin']],
            'Lacquer'                        => [['normal'], ['latin']],
            'Laila'                          => [
                ['300', 'normal', '500', '600', '700'],
                ['latin-ext', 'devanagari', 'latin']
            ],
            'Lakki Reddy'                    => [['normal'], ['telugu', 'latin']],
            'Lalezar'                        => [['normal'], ['arabic', 'latin-ext', 'latin', 'vietnamese']],
            'Lancelot'                       => [['normal'], ['latin-ext', 'latin']],
            'Lateef'                         => [['normal'], ['arabic', 'latin']],
            'Lato'                           => [
                [
                    '100',
                    '100italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '700',
                    '700italic',
                    '900',
                    '900italic'
                ],
                ['latin-ext', 'latin']
            ],
            'League Script'                  => [['normal'], ['latin']],
            'Leckerli One'                   => [['normal'], ['latin']],
            'Ledger'                         => [['normal'], ['cyrillic', 'latin-ext', 'latin']],
            'Lekton'                         => [['normal', 'italic', '700'], ['latin-ext', 'latin']],
            'Lemon'                          => [['normal'], ['latin']],
            'Lemonada'                       => [
                ['300', 'normal', '500', '600', '700'],
                ['arabic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Lexend Deca'                    => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Lexend Exa'                     => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Lexend Giga'                    => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Lexend Mega'                    => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Lexend Peta'                    => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Lexend Tera'                    => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Lexend Zetta'                   => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Libre Barcode 128'              => [['normal'], ['latin']],
            'Libre Barcode 128 Text'         => [['normal'], ['latin']],
            'Libre Barcode 39'               => [['normal'], ['latin']],
            'Libre Barcode 39 Extended'      => [['normal'], ['latin']],
            'Libre Barcode 39 Extended Text' => [['normal'], ['latin']],
            'Libre Barcode 39 Text'          => [['normal'], ['latin']],
            'Libre Baskerville'              => [['normal', 'italic', '700'], ['latin-ext', 'latin']],
            'Libre Caslon Display'           => [['normal'], ['latin-ext', 'latin']],
            'Libre Caslon Text'              => [['normal', 'italic', '700'], ['latin-ext', 'latin']],
            'Libre Franklin'                 => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['latin-ext', 'latin']
            ],
            'Life Savers'                    => [['normal', '700', '800'], ['latin-ext', 'latin']],
            'Lilita One'                     => [['normal'], ['latin-ext', 'latin']],
            'Lily Script One'                => [['normal'], ['latin-ext', 'latin']],
            'Limelight'                      => [['normal'], ['latin-ext', 'latin']],
            'Linden Hill'                    => [['normal', 'italic'], ['latin']],
            'Literata'                       => [
                [
                    'normal',
                    '500',
                    '600',
                    '700',
                    'italic',
                    '500italic',
                    '600italic',
                    '700italic'
                ],
                ['cyrillic', 'greek-ext', 'latin-ext', 'greek', 'latin', 'vietnamese']
            ],
            'Liu Jian Mao Cao'               => [['normal'], ['chinese-simplified', 'latin']],
            'Livvic'                         => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '900',
                    '900italic'
                ],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Lobster'                        => [
                ['normal'],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Lobster Two'                    => [['normal', 'italic', '700', '700italic'], ['latin']],
            'Londrina Outline'               => [['normal'], ['latin']],
            'Londrina Shadow'                => [['normal'], ['latin']],
            'Londrina Sketch'                => [['normal'], ['latin']],
            'Londrina Solid'                 => [['100', '300', 'normal', '900'], ['latin']],
            'Long Cang'                      => [['normal'], ['chinese-simplified', 'latin']],
            'Lora'                           => [
                ['normal', 'italic', '700', '700italic'],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Love Ya Like A Sister'          => [['normal'], ['latin']],
            'Loved by the King'              => [['normal'], ['latin']],
            'Lovers Quarrel'                 => [['normal'], ['latin-ext', 'latin']],
            'Luckiest Guy'                   => [['normal'], ['latin']],
            'Lusitana'                       => [['normal', '700'], ['latin']],
            'Lustria'                        => [['normal'], ['latin']],
            'M PLUS 1p'                      => [
                ['100', '300', 'normal', '500', '700', '800', '900'],
                [
                    'cyrillic-ext',
                    'cyrillic',
                    'greek-ext',
                    'latin-ext',
                    'hebrew',
                    'greek',
                    'latin',
                    'vietnamese',
                    'japanese'
                ]
            ],
            'M PLUS Rounded 1c'              => [
                ['100', '300', 'normal', '500', '700', '800', '900'],
                [
                    'cyrillic-ext',
                    'cyrillic',
                    'greek-ext',
                    'latin-ext',
                    'hebrew',
                    'greek',
                    'latin',
                    'vietnamese',
                    'japanese'
                ]
            ],
            'Ma Shan Zheng'                  => [['normal'], ['chinese-simplified', 'latin']],
            'Macondo'                        => [['normal'], ['latin']],
            'Macondo Swash Caps'             => [['normal'], ['latin']],
            'Mada'                           => [
                ['200', '300', 'normal', '500', '600', '700', '900'],
                ['arabic', 'latin']
            ],
            'Magra'                          => [['normal', '700'], ['latin-ext', 'latin']],
            'Maiden Orange'                  => [['normal'], ['latin']],
            'Maitree'                        => [
                ['200', '300', 'normal', '500', '600', '700'],
                ['latin-ext', 'latin', 'thai', 'vietnamese']
            ],
            'Major Mono Display'             => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Mako'                           => [['normal'], ['latin']],
            'Mali'                           => [
                [
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['latin-ext', 'latin', 'thai', 'vietnamese']
            ],
            'Mallanna'                       => [['normal'], ['telugu', 'latin']],
            'Mandali'                        => [['normal'], ['telugu', 'latin']],
            'Manjari'                        => [['100', 'normal', '700'], ['malayalam', 'latin']],
            'Manrope'                        => [['200', '300', 'normal', '500', '600', '700', '800'], ['cyrillic', 'cyrillic-ext', 'greek', 'latin', 'latin-ext', 'vietnamese']],
            'Mansalva'                       => [['normal'], ['latin']],
            'Manuale'                        => [
                [
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Marcellus'                      => [['normal'], ['latin-ext', 'latin']],
            'Marcellus SC'                   => [['normal'], ['latin-ext', 'latin']],
            'Marck Script'                   => [['normal'], ['cyrillic', 'latin-ext', 'latin']],
            'Margarine'                      => [['normal'], ['latin-ext', 'latin']],
            'Markazi Text'                   => [
                ['normal', '500', '600', '700'],
                ['arabic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Marko One'                      => [['normal'], ['latin']],
            'Marmelad'                       => [['normal'], ['cyrillic', 'latin-ext', 'latin']],
            'Martel'                         => [
                ['200', '300', 'normal', '600', '700', '800', '900'],
                ['latin-ext', 'devanagari', 'latin']
            ],
            'Martel Sans'                    => [
                ['200', '300', 'normal', '600', '700', '800', '900'],
                ['latin-ext', 'devanagari', 'latin']
            ],
            'Marvel'                         => [['normal', 'italic', '700', '700italic'], ['latin']],
            'Mate'                           => [['normal', 'italic'], ['latin']],
            'Mate SC'                        => [['normal'], ['latin']],
            'Maven Pro'                      => [
                ['normal', '500', '700', '900'],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'McLaren'                        => [['normal'], ['latin-ext', 'latin']],
            'Meddon'                         => [['normal'], ['latin']],
            'MedievalSharp'                  => [['normal'], ['latin-ext', 'latin']],
            'Medula One'                     => [['normal'], ['latin']],
            'Meera Inimai'                   => [['normal'], ['latin', 'tamil']],
            'Megrim'                         => [['normal'], ['latin']],
            'Meie Script'                    => [['normal'], ['latin-ext', 'latin']],
            'Merienda'                       => [['normal', '700'], ['latin-ext', 'latin']],
            'Merienda One'                   => [['normal'], ['latin']],
            'Merriweather'                   => [
                [
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '700',
                    '700italic',
                    '900',
                    '900italic'
                ],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Merriweather Sans'              => [
                [
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic'
                ],
                ['latin-ext', 'latin']
            ],
            'Metal'                          => [['normal'], ['khmer']],
            'Metal Mania'                    => [['normal'], ['latin-ext', 'latin']],
            'Metamorphous'                   => [['normal'], ['latin-ext', 'latin']],
            'Metrophobic'                    => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Michroma'                       => [['normal'], ['latin']],
            'Milonga'                        => [['normal'], ['latin-ext', 'latin']],
            'Miltonian'                      => [['normal'], ['latin']],
            'Miltonian Tattoo'               => [['normal'], ['latin']],
            'Mina'                           => [['normal', '700'], ['bengali', 'latin-ext', 'latin']],
            'Miniver'                        => [['normal'], ['latin']],
            'Miriam Libre'                   => [['normal', '700'], ['latin-ext', 'hebrew', 'latin']],
            'Mirza'                          => [
                ['normal', '500', '600', '700'],
                ['arabic', 'latin-ext', 'latin']
            ],
            'Miss Fajardose'                 => [['normal'], ['latin-ext', 'latin']],
            'Mitr'                           => [
                ['200', '300', 'normal', '500', '600', '700'],
                ['latin-ext', 'latin', 'thai', 'vietnamese']
            ],
            'Modak'                          => [['normal'], ['latin-ext', 'devanagari', 'latin']],
            'Modern Antiqua'                 => [['normal'], ['latin-ext', 'latin']],
            'Mogra'                          => [['normal'], ['latin-ext', 'latin', 'gujarati']],
            'Molengo'                        => [['normal'], ['latin-ext', 'latin']],
            'Molle'                          => [['italic'], ['latin-ext', 'latin']],
            'Monda'                          => [['normal', '700'], ['latin-ext', 'latin']],
            'Monofett'                       => [['normal'], ['latin']],
            'Monoton'                        => [['normal'], ['latin']],
            'Monsieur La Doulaise'           => [['normal'], ['latin-ext', 'latin']],
            'Montaga'                        => [['normal'], ['latin']],
            'Montez'                         => [['normal'], ['latin']],
            'Montserrat'                     => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Montserrat Alternates'          => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Montserrat Subrayada'           => [['normal', '700'], ['latin']],
            'Moul'                           => [['normal'], ['khmer']],
            'Moulpali'                       => [['normal'], ['khmer']],
            'Mountains of Christmas'         => [['normal', '700'], ['latin']],
            'Mouse Memoirs'                  => [['normal'], ['latin-ext', 'latin']],
            'Mr Bedfort'                     => [['normal'], ['latin-ext', 'latin']],
            'Mr Dafoe'                       => [['normal'], ['latin-ext', 'latin']],
            'Mr De Haviland'                 => [['normal'], ['latin-ext', 'latin']],
            'Mrs Saint Delafield'            => [['normal'], ['latin-ext', 'latin']],
            'Mrs Sheppards'                  => [['normal'], ['latin-ext', 'latin']],
            'Mukta'                          => [
                ['200', '300', 'normal', '500', '600', '700', '800'],
                ['latin-ext', 'devanagari', 'latin']
            ],
            'Mukta Mahee'                    => [
                ['200', '300', 'normal', '500', '600', '700', '800'],
                ['latin-ext', 'latin', 'gurmukhi']
            ],
            'Mukta Malar'                    => [
                ['200', '300', 'normal', '500', '600', '700', '800'],
                ['latin-ext', 'latin', 'tamil']
            ],
            'Mukta Vaani'                    => [
                ['200', '300', 'normal', '500', '600', '700', '800'],
                ['latin-ext', 'latin', 'gujarati']
            ],
            'Muli'                           => [
                [
                    '200',
                    '300',
                    'normal',
                    '500',
                    '600',
                    '700',
                    '800',
                    '900',
                    '200italic',
                    '300italic',
                    'italic',
                    '500italic',
                    '600italic',
                    '700italic',
                    '800italic',
                    '900italic'
                ],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Mystery Quest'                  => [['normal'], ['latin-ext', 'latin']],
            'NTR'                            => [['normal'], ['telugu', 'latin']],
            'Nanum Brush Script'             => [['normal'], ['korean', 'latin']],
            'Nanum Gothic'                   => [['normal', '700', '800'], ['korean', 'latin']],
            'Nanum Gothic Coding'            => [['normal', '700'], ['korean', 'latin']],
            'Nanum Myeongjo'                 => [['normal', '700', '800'], ['korean', 'latin']],
            'Nanum Pen Script'               => [['normal'], ['korean', 'latin']],
            'Neucha'                         => [['normal'], ['cyrillic', 'latin']],
            'Neuton'                         => [
                ['200', '300', 'normal', 'italic', '700', '800'],
                ['latin-ext', 'latin']
            ],
            'New Rocker'                     => [['normal'], ['latin-ext', 'latin']],
            'News Cycle'                     => [['normal', '700'], ['latin-ext', 'latin']],
            'Niconne'                        => [['normal'], ['latin-ext', 'latin']],
            'Niramit'                        => [
                [
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['latin-ext', 'latin', 'thai', 'vietnamese']
            ],
            'Nixie One'                      => [['normal'], ['latin']],
            'Nobile'                         => [
                ['normal', 'italic', '500', '500italic', '700', '700italic'],
                ['latin-ext', 'latin']
            ],
            'Nokora'                         => [['normal', '700'], ['khmer']],
            'Norican'                        => [['normal'], ['latin-ext', 'latin']],
            'Nosifer'                        => [['normal'], ['latin-ext', 'latin']],
            'Notable'                        => [['normal'], ['latin']],
            'Nothing You Could Do'           => [['normal'], ['latin']],
            'Noticia Text'                   => [
                ['normal', 'italic', '700', '700italic'],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Noto Sans'                      => [
                ['normal', 'italic', '700', '700italic'],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'devanagari', 'greek', 'latin', 'vietnamese']
            ],
            'Noto Sans HK'                   => [
                ['100', '300', 'normal', '500', '700', '900'],
                ['chinese-hongkong', 'latin']
            ],
            'Noto Sans JP'                   => [
                ['100', '300', 'normal', '500', '700', '900'],
                ['latin', 'japanese']
            ],
            'Noto Sans KR'                   => [
                ['100', '300', 'normal', '500', '700', '900'],
                ['korean', 'latin']
            ],
            'Noto Sans SC'                   => [
                ['100', '300', 'normal', '500', '700', '900'],
                ['cyrillic', 'chinese-simplified', 'latin', 'vietnamese']
            ],
            'Noto Sans TC'                   => [
                ['100', '300', 'normal', '500', '700', '900'],
                ['chinese-traditional', 'latin']
            ],
            'Noto Serif'                     => [
                ['normal', 'italic', '700', '700italic'],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'greek', 'latin', 'vietnamese']
            ],
            'Noto Serif JP'                  => [
                ['200', '300', 'normal', '500', '600', '700', '900'],
                ['latin', 'japanese']
            ],
            'Noto Serif KR'                  => [
                ['200', '300', 'normal', '500', '600', '700', '900'],
                ['korean', 'latin']
            ],
            'Noto Serif SC'                  => [
                ['200', '300', 'normal', '500', '600', '700', '900'],
                ['cyrillic', 'chinese-simplified', 'latin', 'vietnamese']
            ],
            'Noto Serif TC'                  => [
                ['200', '300', 'normal', '500', '600', '700', '900'],
                ['cyrillic', 'chinese-traditional', 'latin', 'vietnamese']
            ],
            'Nova Cut'                       => [['normal'], ['latin']],
            'Nova Flat'                      => [['normal'], ['latin']],
            'Nova Mono'                      => [['normal'], ['greek', 'latin']],
            'Nova Oval'                      => [['normal'], ['latin']],
            'Nova Round'                     => [['normal'], ['latin']],
            'Nova Script'                    => [['normal'], ['latin']],
            'Nova Slim'                      => [['normal'], ['latin']],
            'Nova Square'                    => [['normal'], ['latin']],
            'Numans'                         => [['normal'], ['latin']],
            'Nunito'                         => [
                [
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Nunito Sans'                    => [
                [
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Odibee Sans'                    => [['normal'], ['latin']],
            'Odor Mean Chey'                 => [['normal'], ['khmer']],
            'Offside'                        => [['normal'], ['latin']],
            'Old Standard TT'                => [
                ['normal', 'italic', '700'],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Oldenburg'                      => [['normal'], ['latin-ext', 'latin']],
            'Oleo Script'                    => [['normal', '700'], ['latin-ext', 'latin']],
            'Oleo Script Swash Caps'         => [['normal', '700'], ['latin-ext', 'latin']],
            'Open Sans'                      => [
                [
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic'
                ],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'greek', 'latin', 'vietnamese']
            ],
            'Open Sans Condensed'            => [
                ['300', '300italic', '700'],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'greek', 'latin', 'vietnamese']
            ],
            'Oranienbaum'                    => [['normal'], ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin']],
            'Orbitron'                       => [['normal', '500', '600', '700', '800', '900'], ['latin']],
            'Oregano'                        => [['normal', 'italic'], ['latin-ext', 'latin']],
            'Orienta'                        => [['normal'], ['latin-ext', 'latin']],
            'Original Surfer'                => [['normal'], ['latin']],
            'Oswald'                         => [
                ['200', '300', 'normal', '500', '600', '700'],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Over the Rainbow'               => [['normal'], ['latin']],
            'Overlock'                       => [
                ['normal', 'italic', '700', '700italic', '900', '900italic'],
                ['latin-ext', 'latin']
            ],
            'Overlock SC'                    => [['normal'], ['latin-ext', 'latin']],
            'Overpass'                       => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['latin-ext', 'latin']
            ],
            'Overpass Mono'                  => [['300', 'normal', '600', '700'], ['latin-ext', 'latin']],
            'Ovo'                            => [['normal'], ['latin']],
            'Oxygen'                         => [['300', 'normal', '700'], ['latin-ext', 'latin']],
            'Oxygen Mono'                    => [['normal'], ['latin-ext', 'latin']],
            'PT Mono'                        => [['normal'], ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin']],
            'PT Sans'                        => [
                ['normal', 'italic', '700', '700italic'],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin']
            ],
            'PT Sans Caption'                => [
                ['normal', '700'],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin']
            ],
            'PT Sans Narrow'                 => [
                ['normal', '700'],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin']
            ],
            'PT Serif'                       => [
                ['normal', 'italic', '700', '700italic'],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin']
            ],
            'PT Serif Caption'               => [
                ['normal', 'italic'],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin']
            ],
            'Pacifico'                       => [
                ['normal'],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Padauk'                         => [['normal', '700'], ['myanmar', 'latin']],
            'Palanquin'                      => [
                ['100', '200', '300', 'normal', '500', '600', '700'],
                ['latin-ext', 'devanagari', 'latin']
            ],
            'Palanquin Dark'                 => [
                ['normal', '500', '600', '700'],
                ['latin-ext', 'devanagari', 'latin']
            ],
            'Pangolin'                       => [
                ['normal'],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Paprika'                        => [['normal'], ['latin']],
            'Parisienne'                     => [['normal'], ['latin-ext', 'latin']],
            'Passero One'                    => [['normal'], ['latin-ext', 'latin']],
            'Passion One'                    => [['normal', '700', '900'], ['latin-ext', 'latin']],
            'Pathway Gothic One'             => [['normal'], ['latin-ext', 'latin']],
            'Patrick Hand'                   => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Patrick Hand SC'                => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Pattaya'                        => [
                ['normal'],
                ['cyrillic', 'latin-ext', 'latin', 'thai', 'vietnamese']
            ],
            'Patua One'                      => [['normal'], ['latin']],
            'Pavanam'                        => [['normal'], ['latin-ext', 'latin', 'tamil']],
            'Paytone One'                    => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Peddana'                        => [['normal'], ['telugu', 'latin']],
            'Peralta'                        => [['normal'], ['latin-ext', 'latin']],
            'Permanent Marker'               => [['normal'], ['latin']],
            'Petit Formal Script'            => [['normal'], ['latin-ext', 'latin']],
            'Petrona'                        => [['normal'], ['latin']],
            'Philosopher'                    => [
                ['normal', 'italic', '700', '700italic'],
                ['cyrillic-ext', 'cyrillic', 'latin', 'vietnamese']
            ],
            'Piedra'                         => [['normal'], ['latin-ext', 'latin']],
            'Pinyon Script'                  => [['normal'], ['latin']],
            'Pirata One'                     => [['normal'], ['latin-ext', 'latin']],
            'Plaster'                        => [['normal'], ['latin-ext', 'latin']],
            'Play'                           => [
                ['normal', '700'],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'greek', 'latin', 'vietnamese']
            ],
            'Playball'                       => [['normal'], ['latin-ext', 'latin']],
            'Playfair Display'               => [
                ['normal', 'italic', '700', '700italic', '900', '900italic'],
                ['cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Playfair Display SC'            => [
                ['normal', 'italic', '700', '700italic', '900', '900italic'],
                ['cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Plus Jakarta Sans'            => [
                ['300', '300italic', 'normal', 'italic', '500', '500italic', '600', '600italic', '700', '700italic', '800', '800italic'],
                ['cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Podkova'                        => [
                ['normal', '500', '600', '700', '800'],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Poiret One'                     => [['normal'], ['cyrillic', 'latin-ext', 'latin']],
            'Poller One'                     => [['normal'], ['latin']],
            'Poly'                           => [['normal', 'italic'], ['latin']],
            'Pompiere'                       => [['normal'], ['latin']],
            'Pontano Sans'                   => [['normal'], ['latin-ext', 'latin']],
            'Poor Story'                     => [['normal'], ['korean', 'latin']],
            'Poppins'                        => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['latin-ext', 'devanagari', 'latin']
            ],
            'Port Lligat Sans'               => [['normal'], ['latin']],
            'Port Lligat Slab'               => [['normal'], ['latin']],
            'Pragati Narrow'                 => [['normal', '700'], ['latin-ext', 'devanagari', 'latin']],
            'Prata'                          => [['normal'], ['cyrillic-ext', 'cyrillic', 'latin', 'vietnamese']],
            'Preahvihear'                    => [['normal'], ['khmer']],
            'Press Start 2P'                 => [
                ['normal'],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'greek', 'latin']
            ],
            'Pridi'                          => [
                ['200', '300', 'normal', '500', '600', '700'],
                ['latin-ext', 'latin', 'thai', 'vietnamese']
            ],
            'Princess Sofia'                 => [['normal'], ['latin-ext', 'latin']],
            'Prociono'                       => [['normal'], ['latin']],
            'Prompt'                         => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['latin-ext', 'latin', 'thai', 'vietnamese']
            ],
            'Prosto One'                     => [['normal'], ['cyrillic', 'latin-ext', 'latin']],
            'Proza Libre'                    => [
                [
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic'
                ],
                ['latin-ext', 'latin']
            ],
            'Public Sans'                    => [
                [
                    '100',
                    '200',
                    '300',
                    'normal',
                    '500',
                    '600',
                    '700',
                    '800',
                    '900',
                    '100italic',
                    '200italic',
                    '300italic',
                    'italic',
                    '500italic',
                    '600italic',
                    '700italic',
                    '800italic',
                    '900italic'
                ],
                ['latin-ext', 'latin']
            ],
            'Puritan'                        => [['normal', 'italic', '700', '700italic'], ['latin']],
            'Purple Purse'                   => [['normal'], ['latin-ext', 'latin']],
            'Quando'                         => [['normal'], ['latin-ext', 'latin']],
            'Quantico'                       => [['normal', 'italic', '700', '700italic'], ['latin']],
            'Quattrocento'                   => [['normal', '700'], ['latin-ext', 'latin']],
            'Quattrocento Sans'              => [
                ['normal', 'italic', '700', '700italic'],
                ['latin-ext', 'latin']
            ],
            'Questrial'                      => [['normal'], ['latin']],
            'Quicksand'                      => [
                ['300', 'normal', '500', '600', '700'],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Quintessential'                 => [['normal'], ['latin-ext', 'latin']],
            'Qwigley'                        => [['normal'], ['latin-ext', 'latin']],
            'Racing Sans One'                => [['normal'], ['latin-ext', 'latin']],
            'Radley'                         => [['normal', 'italic'], ['latin-ext', 'latin']],
            'Rajdhani'                       => [
                ['300', 'normal', '500', '600', '700'],
                ['latin-ext', 'devanagari', 'latin']
            ],
            'Rakkas'                         => [['normal'], ['arabic', 'latin-ext', 'latin']],
            'Raleway'                        => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['latin-ext', 'latin']
            ],
            'Raleway Dots'                   => [['normal'], ['latin-ext', 'latin']],
            'Ramabhadra'                     => [['normal'], ['telugu', 'latin']],
            'Ramaraja'                       => [['normal'], ['telugu', 'latin']],
            'Rambla'                         => [
                ['normal', 'italic', '700', '700italic'],
                ['latin-ext', 'latin']
            ],
            'Rammetto One'                   => [['normal'], ['latin-ext', 'latin']],
            'Ranchers'                       => [['normal'], ['latin-ext', 'latin']],
            'Rancho'                         => [['normal'], ['latin']],
            'Ranga'                          => [['normal', '700'], ['latin-ext', 'devanagari', 'latin']],
            'Rasa'                           => [
                ['300', 'normal', '500', '600', '700'],
                ['latin-ext', 'latin', 'gujarati']
            ],
            'Rationale'                      => [['normal'], ['latin']],
            'Ravi Prakash'                   => [['normal'], ['telugu', 'latin']],
            'Red Hat Display'                => [
                [
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '700',
                    '700italic',
                    '900',
                    '900italic'
                ],
                ['latin-ext', 'latin']
            ],
            'Red Hat Text'                   => [
                ['normal', 'italic', '500', '500italic', '700', '700italic'],
                ['latin-ext', 'latin']
            ],
            'Redressed'                      => [['normal'], ['latin']],
            'Reem Kufi'                      => [['normal'], ['arabic', 'latin']],
            'Reenie Beanie'                  => [['normal'], ['latin']],
            'Revalia'                        => [['normal'], ['latin-ext', 'latin']],
            'Rhodium Libre'                  => [['normal'], ['latin-ext', 'devanagari', 'latin']],
            'Ribeye'                         => [['normal'], ['latin-ext', 'latin']],
            'Ribeye Marrow'                  => [['normal'], ['latin-ext', 'latin']],
            'Righteous'                      => [['normal'], ['latin-ext', 'latin']],
            'Risque'                         => [['normal'], ['latin-ext', 'latin']],
            'Roboto'                         => [
                [
                    '100',
                    '100italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '700',
                    '700italic',
                    '900',
                    '900italic'
                ],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'greek', 'latin', 'vietnamese']
            ],
            'Roboto Condensed'               => [
                ['300', '300italic', 'normal', 'italic', '700', '700italic'],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'greek', 'latin', 'vietnamese']
            ],
            'Roboto Mono'                    => [
                [
                    '100',
                    '100italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '700',
                    '700italic'
                ],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'greek', 'latin', 'vietnamese']
            ],
            'Roboto Slab'                    => [
                ['100', '200', '300', 'normal', '500', '600', '700', '800', '900'],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'greek', 'latin', 'vietnamese']
            ],
            'Rochester'                      => [['normal'], ['latin']],
            'Rock Salt'                      => [['normal'], ['latin']],
            'Rokkitt'                        => [
                ['100', '200', '300', 'normal', '500', '600', '700', '800', '900'],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Romanesco'                      => [['normal'], ['latin-ext', 'latin']],
            'Ropa Sans'                      => [['normal', 'italic'], ['latin-ext', 'latin']],
            'Rosario'                        => [
                [
                    '300',
                    'normal',
                    '500',
                    '600',
                    '700',
                    '300italic',
                    'italic',
                    '500italic',
                    '600italic',
                    '700italic'
                ],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Rosarivo'                       => [['normal', 'italic'], ['latin-ext', 'latin']],
            'Rouge Script'                   => [['normal'], ['latin']],
            'Rozha One'                      => [['normal'], ['latin-ext', 'devanagari', 'latin']],
            'Rubik'                          => [
                [
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '700',
                    '700italic',
                    '900',
                    '900italic'
                ],
                ['cyrillic', 'latin-ext', 'hebrew', 'latin']
            ],
            'Rubik Mono One'                 => [['normal'], ['cyrillic', 'latin-ext', 'latin']],
            'Ruda'                           => [['normal', '700', '900'], ['latin-ext', 'latin']],
            'Rufina'                         => [['normal', '700'], ['latin-ext', 'latin']],
            'Ruge Boogie'                    => [['normal'], ['latin-ext', 'latin']],
            'Ruluko'                         => [['normal'], ['latin-ext', 'latin']],
            'Rum Raisin'                     => [['normal'], ['latin-ext', 'latin']],
            'Ruslan Display'                 => [['normal'], ['cyrillic', 'latin-ext', 'latin']],
            'Russo One'                      => [['normal'], ['cyrillic', 'latin-ext', 'latin']],
            'Ruthie'                         => [['normal'], ['latin-ext', 'latin']],
            'Rye'                            => [['normal'], ['latin-ext', 'latin']],
            'Sacramento'                     => [['normal'], ['latin-ext', 'latin']],
            'Sahitya'                        => [['normal', '700'], ['devanagari', 'latin']],
            'Sail'                           => [['normal'], ['latin-ext', 'latin']],
            'Saira'                          => [
                ['100', '200', '300', 'normal', '500', '600', '700', '800', '900'],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Saira Condensed'                => [
                ['100', '200', '300', 'normal', '500', '600', '700', '800', '900'],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Saira Extra Condensed'          => [
                ['100', '200', '300', 'normal', '500', '600', '700', '800', '900'],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Saira Semi Condensed'           => [
                ['100', '200', '300', 'normal', '500', '600', '700', '800', '900'],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Saira Stencil One'              => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Salsa'                          => [['normal'], ['latin']],
            'Sanchez'                        => [['normal', 'italic'], ['latin-ext', 'latin']],
            'Sancreek'                       => [['normal'], ['latin-ext', 'latin']],
            'Sansita'                        => [
                [
                    'normal',
                    'italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['latin-ext', 'latin']
            ],
            'Sarabun'                        => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic'
                ],
                ['latin-ext', 'latin', 'thai', 'vietnamese']
            ],
            'Sarala'                         => [['normal', '700'], ['latin-ext', 'devanagari', 'latin']],
            'Sarina'                         => [['normal'], ['latin-ext', 'latin']],
            'Sarpanch'                       => [
                ['normal', '500', '600', '700', '800', '900'],
                ['latin-ext', 'devanagari', 'latin']
            ],
            'Satisfy'                        => [['normal'], ['latin']],
            'Sawarabi Gothic'                => [
                ['normal'],
                ['cyrillic', 'latin-ext', 'latin', 'vietnamese', 'japanese']
            ],
            'Sawarabi Mincho'                => [['normal'], ['latin-ext', 'latin', 'japanese']],
            'Scada'                          => [
                ['normal', 'italic', '700', '700italic'],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin']
            ],
            'Scheherazade'                   => [['normal', '700'], ['arabic', 'latin']],
            'Schoolbell'                     => [['normal'], ['latin']],
            'Scope One'                      => [['normal'], ['latin-ext', 'latin']],
            'Seaweed Script'                 => [['normal'], ['latin-ext', 'latin']],
            'Secular One'                    => [['normal'], ['latin-ext', 'hebrew', 'latin']],
            'Sedgwick Ave'                   => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Sedgwick Ave Display'           => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Sevillana'                      => [['normal'], ['latin-ext', 'latin']],
            'Seymour One'                    => [['normal'], ['cyrillic', 'latin-ext', 'latin']],
            'Shadows Into Light'             => [['normal'], ['latin']],
            'Shadows Into Light Two'         => [['normal'], ['latin-ext', 'latin']],
            'Shanti'                         => [['normal'], ['latin']],
            'Share'                          => [
                ['normal', 'italic', '700', '700italic'],
                ['latin-ext', 'latin']
            ],
            'Share Tech'                     => [['normal'], ['latin']],
            'Share Tech Mono'                => [['normal'], ['latin']],
            'Shojumaru'                      => [['normal'], ['latin-ext', 'latin']],
            'Short Stack'                    => [['normal'], ['latin']],
            'Shrikhand'                      => [['normal'], ['latin-ext', 'latin', 'gujarati']],
            'Siemreap'                       => [['normal'], ['khmer']],
            'Sigmar One'                     => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Signika'                        => [['300', 'normal', '600', '700'], ['latin-ext', 'latin']],
            'Signika Negative'               => [['300', 'normal', '600', '700'], ['latin-ext', 'latin']],
            'Simonetta'                      => [
                ['normal', 'italic', '900', '900italic'],
                ['latin-ext', 'latin']
            ],
            'Single Day'                     => [['normal'], ['korean']],
            'Sintony'                        => [['normal', '700'], ['latin-ext', 'latin']],
            'Sirin Stencil'                  => [['normal'], ['latin']],
            'Six Caps'                       => [['normal'], ['latin']],
            'Skranji'                        => [['normal', '700'], ['latin-ext', 'latin']],
            'Slabo 13px'                     => [['normal'], ['latin-ext', 'latin']],
            'Slabo 27px'                     => [['normal'], ['latin-ext', 'latin']],
            'Slackey'                        => [['normal'], ['latin']],
            'Smokum'                         => [['normal'], ['latin']],
            'Smythe'                         => [['normal'], ['latin']],
            'Sniglet'                        => [['normal', '800'], ['latin-ext', 'latin']],
            'Snippet'                        => [['normal'], ['latin']],
            'Snowburst One'                  => [['normal'], ['latin-ext', 'latin']],
            'Sofadi One'                     => [['normal'], ['latin']],
            'Sofia'                          => [['normal'], ['latin']],
            'Solway'                         => [['300', 'normal', '500', '700', '800'], ['latin']],
            'Song Myung'                     => [['normal'], ['korean', 'latin']],
            'Sonsie One'                     => [['normal'], ['latin-ext', 'latin']],
            'Sora'                           => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic'
                ],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Sorts Mill Goudy'               => [['normal', 'italic'], ['latin-ext', 'latin']],
            'Source Code Pro'                => [
                [
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '900',
                    '900italic'
                ],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'greek', 'latin', 'vietnamese']
            ],
            'Source Sans Pro'                => [
                [
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '900',
                    '900italic'
                ],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'greek', 'latin', 'vietnamese']
            ],
            'Source Serif Pro'               => [['normal', '600', '700'], ['latin-ext', 'latin']],
            'Space Mono'                     => [
                ['normal', 'italic', '700', '700italic'],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Spartan'                        => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['latin-ext', 'latin', 'vietnamese']
            ],
            'Special Elite'                  => [['normal'], ['latin']],
            'Spectral'                       => [
                [
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic'
                ],
                ['cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Spectral SC'                    => [
                [
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic'
                ],
                ['cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Spicy Rice'                     => [['normal'], ['latin']],
            'Spinnaker'                      => [['normal'], ['latin-ext', 'latin']],
            'Spirax'                         => [['normal'], ['latin']],
            'Squada One'                     => [['normal'], ['latin']],
            'Sree Krushnadevaraya'           => [['normal'], ['telugu', 'latin']],
            'Sriracha'                       => [['normal'], ['latin-ext', 'latin', 'thai', 'vietnamese']],
            'Srisakdi'                       => [['normal', '700'], ['latin-ext', 'latin', 'thai', 'vietnamese']],
            'Staatliches'                    => [['normal'], ['latin-ext', 'latin']],
            'Stalemate'                      => [['normal'], ['latin-ext', 'latin']],
            'Stalinist One'                  => [['normal'], ['cyrillic', 'latin-ext', 'latin']],
            'Stardos Stencil'                => [['normal', '700'], ['latin']],
            'Stint Ultra Condensed'          => [['normal'], ['latin-ext', 'latin']],
            'Stint Ultra Expanded'           => [['normal'], ['latin-ext', 'latin']],
            'Stoke'                          => [['300', 'normal'], ['latin-ext', 'latin']],
            'Strait'                         => [['normal'], ['latin']],
            'Stylish'                        => [['normal'], ['korean', 'latin']],
            'Sue Ellen Francisco'            => [['normal'], ['latin']],
            'Suez One'                       => [['normal'], ['latin-ext', 'hebrew', 'latin']],
            'Sulphur Point'                  => [['300', 'normal', '700'], ['latin-ext', 'latin']],
            'Sumana'                         => [['normal', '700'], ['latin-ext', 'devanagari', 'latin']],
            'Sunflower'                      => [['300', '500', '700'], ['korean', 'latin']],
            'Sunshiney'                      => [['normal'], ['latin']],
            'Supermercado One'               => [['normal'], ['latin']],
            'Sura'                           => [['normal', '700'], ['latin-ext', 'devanagari', 'latin']],
            'Suranna'                        => [['normal'], ['telugu', 'latin']],
            'Suravaram'                      => [['normal'], ['telugu', 'latin']],
            'Suwannaphum'                    => [['normal'], ['khmer']],
            'Swanky and Moo Moo'             => [['normal'], ['latin']],
            'Syncopate'                      => [['normal', '700'], ['latin']],
            'Tajawal'                        => [
                ['200', '300', 'normal', '500', '700', '800', '900'],
                ['arabic', 'latin']
            ],
            'Tangerine'                      => [['normal', '700'], ['latin']],
            'Taprom'                         => [['normal'], ['khmer']],
            'Tauri'                          => [['normal'], ['latin-ext', 'latin']],
            'Taviraj'                        => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['latin-ext', 'latin', 'thai', 'vietnamese']
            ],
            'Teko'                           => [
                ['300', 'normal', '500', '600', '700'],
                ['latin-ext', 'devanagari', 'latin']
            ],
            'Telex'                          => [['normal'], ['latin-ext', 'latin']],
            'Tenali Ramakrishna'             => [['normal'], ['telugu', 'latin']],
            'Tenor Sans'                     => [['normal'], ['cyrillic', 'latin-ext', 'latin']],
            'Text Me One'                    => [['normal'], ['latin-ext', 'latin']],
            'Thasadith'                      => [
                ['normal', 'italic', '700', '700italic'],
                ['latin-ext', 'latin', 'thai', 'vietnamese']
            ],
            'The Girl Next Door'             => [['normal'], ['latin']],
            'Tienne'                         => [['normal', '700', '900'], ['latin']],
            'Tillana'                        => [
                ['normal', '500', '600', '700', '800'],
                ['latin-ext', 'devanagari', 'latin']
            ],
            'Timmana'                        => [['normal'], ['telugu', 'latin']],
            'Tinos'                          => [
                ['normal', 'italic', '700', '700italic'],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'hebrew', 'greek', 'latin', 'vietnamese']
            ],
            'Titan One'                      => [['normal'], ['latin-ext', 'latin']],
            'Titillium Web'                  => [
                [
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '900'
                ],
                ['latin-ext', 'latin']
            ],
            'Tomorrow'                       => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['latin-ext', 'latin']
            ],
            'Trade Winds'                    => [['normal'], ['latin']],
            'Trirong'                        => [
                [
                    '100',
                    '100italic',
                    '200',
                    '200italic',
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '800',
                    '800italic',
                    '900',
                    '900italic'
                ],
                ['latin-ext', 'latin', 'thai', 'vietnamese']
            ],
            'Trocchi'                        => [['normal'], ['latin-ext', 'latin']],
            'Trochut'                        => [['normal', 'italic', '700'], ['latin']],
            'Trykker'                        => [['normal'], ['latin-ext', 'latin']],
            'Tulpen One'                     => [['normal'], ['latin']],
            'Turret Road'                    => [
                ['200', '300', 'normal', '500', '700', '800'],
                ['latin-ext', 'latin']
            ],
            'Ubuntu'                         => [
                [
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '700',
                    '700italic'
                ],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'greek', 'latin']
            ],
            'Ubuntu Condensed'               => [
                ['normal'],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'greek', 'latin']
            ],
            'Ubuntu Mono'                    => [
                ['normal', 'italic', '700', '700italic'],
                ['cyrillic-ext', 'cyrillic', 'greek-ext', 'latin-ext', 'greek', 'latin']
            ],
            'Ultra'                          => [['normal'], ['latin']],
            'Uncial Antiqua'                 => [['normal'], ['latin']],
            'Underdog'                       => [['normal'], ['cyrillic', 'latin-ext', 'latin']],
            'Unica One'                      => [['normal'], ['latin-ext', 'latin']],
            'UnifrakturCook'                 => [['700'], ['latin']],
            'UnifrakturMaguntia'             => [['normal'], ['latin']],
            'Unkempt'                        => [['normal', '700'], ['latin']],
            'Unlock'                         => [['normal'], ['latin']],
            'Unna'                           => [
                ['normal', 'italic', '700', '700italic'],
                ['latin-ext', 'latin']
            ],
            'VT323'                          => [['normal'], ['latin-ext', 'latin', 'vietnamese']],
            'Vampiro One'                    => [['normal'], ['latin-ext', 'latin']],
            'Varela'                         => [['normal'], ['latin-ext', 'latin']],
            'Varela Round'                   => [['normal'], ['latin-ext', 'hebrew', 'latin', 'vietnamese']],
            'Vast Shadow'                    => [['normal'], ['latin']],
            'Vesper Libre'                   => [
                ['normal', '500', '700', '900'],
                ['latin-ext', 'devanagari', 'latin']
            ],
            'Vibes'                          => [['normal'], ['arabic', 'latin']],
            'Vibur'                          => [['normal'], ['latin']],
            'Vidaloka'                       => [['normal'], ['latin']],
            'Viga'                           => [['normal'], ['latin-ext', 'latin']],
            'Voces'                          => [['normal'], ['latin-ext', 'latin']],
            'Volkhov'                        => [['normal', 'italic', '700', '700italic'], ['latin']],
            'Vollkorn'                       => [
                [
                    'normal',
                    'italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic',
                    '900',
                    '900italic'
                ],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'greek', 'latin', 'vietnamese']
            ],
            'Vollkorn SC'                    => [
                ['normal', '600', '700', '900'],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Voltaire'                       => [['normal'], ['latin']],
            'Waiting for the Sunrise'        => [['normal'], ['latin']],
            'Wallpoet'                       => [['normal'], ['latin']],
            'Walter Turncoat'                => [['normal'], ['latin']],
            'Warnes'                         => [['normal'], ['latin-ext', 'latin']],
            'Wellfleet'                      => [['normal'], ['latin-ext', 'latin']],
            'Wendy One'                      => [['normal'], ['latin-ext', 'latin']],
            'Wire One'                       => [['normal'], ['latin']],
            'Work Sans'                      => [
                ['100', '200', '300', 'normal', '500', '600', '700', '800', '900'],
                ['latin-ext', 'latin']
            ],
            'Yanone Kaffeesatz'              => [
                ['200', '300', 'normal', '700'],
                ['cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Yantramanav'                    => [
                ['100', '300', 'normal', '500', '700', '900'],
                ['latin-ext', 'devanagari', 'latin']
            ],
            'Yatra One'                      => [['normal'], ['latin-ext', 'devanagari', 'latin']],
            'Yellowtail'                     => [['normal'], ['latin']],
            'Yeon Sung'                      => [['normal'], ['korean', 'latin']],
            'Yeseva One'                     => [
                ['normal'],
                ['cyrillic-ext', 'cyrillic', 'latin-ext', 'latin', 'vietnamese']
            ],
            'Yesteryear'                     => [['normal'], ['latin']],
            'Yrsa'                           => [['300', 'normal', '500', '600', '700'], ['latin-ext', 'latin']],
            'ZCOOL KuaiLe'                   => [['normal'], ['chinese-simplified', 'latin']],
            'ZCOOL QingKe HuangYou'          => [['normal'], ['chinese-simplified', 'latin']],
            'ZCOOL XiaoWei'                  => [['normal'], ['chinese-simplified', 'latin']],
            'Zeyada'                         => [['normal'], ['latin']],
            'Zhi Mang Xing'                  => [['normal'], ['chinese-simplified', 'latin']],
            'Zilla Slab'                     => [
                [
                    '300',
                    '300italic',
                    'normal',
                    'italic',
                    '500',
                    '500italic',
                    '600',
                    '600italic',
                    '700',
                    '700italic'
                ],
                ['latin-ext', 'latin']
            ],
            'Zilla Slab Highlight'           => [['normal', '700'], ['latin-ext', 'latin']]
        ];
    }
}
