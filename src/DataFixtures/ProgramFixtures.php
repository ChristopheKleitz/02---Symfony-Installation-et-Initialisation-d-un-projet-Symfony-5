<?php


namespace App\DataFixtures;


use App\Entity\Program;
use App\Service\Slugify;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    const PROGRAMS = [
        'Walking Dead' => [
            'summary' => 'Le policier Rick Grimes se réveille après un long coma. Il découvre avec effarement que le monde, ravagé par une épidémie, est envahi par les morts-vivants.',
            'category' => 'Horreur',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BZmFlMTA0MmUtNWVmOC00ZmE1LWFmMDYtZTJhYjJhNGVjYTU5XkEyXkFqcGdeQXVyMTAzMDM4MjM0._V1_.jpg',
        ],
        'The Haunting Of Hill House' => [
            'summary' => 'Plusieurs frères et sœurs qui, enfants, ont grandi dans la demeure qui allait devenir la maison hantée la plus célèbre des États-Unis, sont contraints de se réunir pour finalement affronter les fantômes de leur passé.',
            'category' => 'Horreur',
            'poster' => 'https://fr.web.img5.acsta.net/r_1920_1080/pictures/18/09/20/08/44/5720467.jpg',
        ],
        'American Horror Story' => [
            'summary' => 'A chaque saison, son histoire. American Horror Story nous embarque dans des récits à la fois poignants et cauchemardesques, mêlant la peur, le gore et le politiquement correct.',
            'category' => 'Horreur',
            'poster' => 'https://www.scifinow.co.uk/wp-content/uploads/2019/08/american_horror_story_ver102_xlg.jpg',
        ],
        'Love Death And Robots' => [
            'summary' => 'Un yaourt susceptible, des soldats lycanthropes, des robots déchaînés, des monstres-poubelles, des chasseurs de primes cyborgs, des araignées extraterrestres et des démons assoiffés de sang : tout ce beau monde est réuni dans 18 courts métrages animés déconseillés aux âmes sensibles.',
            'category' => 'Horreur',
            'poster' => 'https://fr.web.img2.acsta.net/r_1920_1080/pictures/19/02/15/09/58/1377321.jpg',
        ],
        'Penny Dreadful' => [
            'summary' => 'Dans le Londres ancien, Vanessa Ives, une jeune femme puissante aux pouvoirs hypnotiques, allie ses forces à celles de Ethan, un garçon rebelle et violent aux allures de cowboy, et de Sir Malcolm, un vieil homme riche aux ressources inépuisables. Ensemble, ils combattent un ennemi inconnu, presque invisible, qui ne semble pas humain et qui massacre la population.',
            'category' => 'Horreur',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BNmE5MDE0ZmMtY2I5Mi00Y2RjLWJlYjMtODkxODQ5OWY1ODdkXkEyXkFqcGdeQXVyNjU2NjA5NjM@._V1_SY1000_CR0,0,695,1000_AL_.jpg',
        ],
        'Fear The Walking Dead' => [
            'summary' => 'La série se déroule au tout début de l épidémie relatée dans la série mère The Walking Dead et se passe dans la ville de Los Angeles, et non à Atlanta. Madison est conseillère dans un lycée de Los Angeles. Depuis la mort de son mari, elle élève seule ses deux enfants : Alicia, excellente élève qui découvre les premiers émois amoureux, et son grand frère Nick qui a quitté la fac et a sombré dans la drogue.',
            'category' => 'Horreur',
            'poster' => 'https://m.media-amazon.com/images/M/MV5BYWNmY2Y1NTgtYTExMS00NGUxLWIxYWQtMjU4MjNkZjZlZjQ3XkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_SY1000_CR0,0,666,1000_AL_.jpg',
        ],
        'The Boys' => [
            'summary' => 'Dans un monde fictif où les super-héros se sont laissés corrompre par la célébrité et la gloire et ont peu à peu révélé la part sombre de leur personnalité, une équipe de justiciers qui se fait appeler "The Boys" décide de passer à l\'action et d\'abattre ces super-héros autrefois appréciés de tous.',
            'category' => 'Action',
            'poster' => 'https://fr.web.img3.acsta.net/r_1920_1080/pictures/20/07/09/09/22/5563876.jpg'
        ],
        'La Flamme' => [
            'summary' => 'Dans cette saison de LA FLAMME, le cœur à prendre est celui de Marc, pilote de ligne. La vie lui a tout donné... sauf une copilote. Pendant 9 semaines, dans une sublime villa, 13 femmes vont s’affronter pour le séduire et tenter d’allumer en lui... LA FLAMME. Alors, armez les toboggans, vérifiez la porte opposée... Marc va emmener ses prétendantes au 7ème ciel !',
            'category' => 'Comédie',
            'poster' => 'https://fr.web.img2.acsta.net/r_1920_1080/pictures/20/10/06/08/33/1057925.jpg',
        ],
        'The Witcher' => [
            'summary' => 'Le sorceleur Geralt, un chasseur de monstres mutant, se bat pour trouver sa place dans un monde où les humains se révèlent souvent plus vicieux que les bêtes.',
            'category' => 'Fantastique',
            'poster' => 'https://fr.web.img6.acsta.net/r_1920_1080/pictures/19/12/12/12/13/2421997.jpg',
        ],
        'Altered Carbon' => [
            'summary' => 'Takeshi Kovacs est un ancien soldat et seul survivant d’un groupe de guerriers d\'élite vaincus lors d’un soulèvement contre le nouvel ordre mondial. Son esprit est emprisonné \"dans la glace\" pendant des siècles, jusqu\’à ce que Laurens Bancroft, un homme extrêmement riche et vivant depuis plusieurs siècles lui offre la chance de vivre à nouveau. En échange, Kovacs doit résoudre un meurtre ... celui de Bancroft lui-même.',
            'category' => 'Science Fiction',
            'poster' => 'https://fr.web.img2.acsta.net/r_1920_1080/pictures/20/01/30/15/12/3167785.jpg',
        ],
        'Dr House' => [
            'summary' => 'Le Dr Greg House est un médecin revêche qui ne fait confiance à personne, et encore moins à ses patients. Irrévérencieux et controversé, il n\'en serait que plus heureux s\'il pouvait ne pas adresser la parole à ses patients. Mais House est un brillant médecin. Et avec son équipe d\'experts, il est prêt à tout pour résoudre les cas médicaux les plus mystérieux et sauver des vies.',
            'category' => 'Médical',
            'poster' => 'https://fr.web.img4.acsta.net/r_1920_1080/pictures/19/12/29/05/20/4049837.jpg',
        ],

    ];

    private $slug;

    public function __construct(Slugify $slugify)
    {
        $this->slug = $slugify;
    }

    public function load(ObjectManager $manager)
    {
        $i = 0;
        foreach (self::PROGRAMS as $title => $data) {
            $program = new Program();
            $program->setTitle($title);
            $program->setSummary($data['summary']);
            $program->setCategory($this->getReference($data['category']));
            $program->setPoster($data['poster']);
            $program = $this->slug->generate($program->getTitle());
            $manager->persist($program);
            $this->addReference('program_'.$i, $program);
            $i++;
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [CategoryFixtures::class];
    }
}