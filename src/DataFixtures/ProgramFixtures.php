<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    const PROGRAMS = [
        [
            'title' => 'Walking Dead',
            'synopsis' => 'Des zombies envahissent la terre.',
            'category' => 'category_Action',
        ],
        [
            'title' => 'Fast and Furious',
            'synopsis' => 'Fast and Furious — ou Rapides et Dangereux au Québec — est une série de films d\'action américains, dont les thèmes tournent principalement autour des voitures et de la famille. Distribuée par Universal Pictures, elle comprend, à ce jour, onze longs métrages et deux courts métrages.',
            'category' => 'category_Action',
        ],
        [
            'title' => 'black lightning',
            'synopsis' => 'Jefferson Pierce travaille comme directeur d\'école secondaire. Cependant, lorsqu\'une nouvelle bande de voyous arrive en ville, il est obligé de reprendre son activité de super-héros.',
            'category' => 'category_Action',
        ],
        [
            'title' => 'The Punisher',
            'synopsis' => 'Après le massacre de toute sa famille, un ex-agent d\'élite du FBI, que l\'on disait mort dans le carnage, se lance dans une impitoyable vendetta. Seule la mort de ses ennemis pourra l\'arrêter.',
            'category' => 'category_Action',
        ],
        [
            'title' => 'Daredevil',
            'synopsis' => 'Avocat luttant contre l\'injustice et aveugle depuis l\'enfance, Matt Murdock fait place au super-héros Daredevil lorsque la nuit tombe sur les rues de New York.',
            'category' => 'category_Action',
        ],
        [
            'title' => 'Higurashi no naku koro ni',
            'synopsis' => 'uin 1983. Hinamizawa est une petite ville d\'apparence paisible de la campagne japonaise où le personnage principal, Keiichi Maebara, vient emménager avec sa famille. ',
            'category' => 'category_Animation',
        ],
        [
            'title' => 'Great Teacher Onizuka',
            'synopsis' => 'Great Teacher Onizuka, souvent abrégé en GTO, est un shōnen manga racontant l\'histoire de Eikichi Onizuka, professeur dans une école. L\'histoire de GTO suit celle de Young GTO, suivant elle-même celle de Bad Company, du même auteur.',
            'category' => 'category_Animation',
        ],
        [
            'title' => 'Bleach',
            'synopsis' => 'Bleach est un shōnen manga écrit et illustré par Tite Kubo.',
            'category' => 'category_Animation',
        ],
        [
            'title' => 'Naruto',
            'synopsis' => 'Naruto est un shōnen manga écrit et dessiné par Masashi Kishimoto.  ',
            'category' => 'category_Animation',
        ],
        [
            'title' => 'One Piece',
            'synopsis' => 'One Piece est une série de shōnen mangas créée par Eiichirō Oda.',
            'category' => 'category_Animation',
        ],
        [
            'title' => 'The Last of Us',
            'synopsis' => 'Pour Joel, la survie est une préoccupation quotidienne qu\'il gère à sa manière. Mais quand son chemin croise celui d\'Ellie, leur voyage à travers ce qui reste des États-Unis va mettre à rude épreuve leur humanité et leur volonté de survivre.',
            'category' => 'category_Aventure',
        ],
        [
            'title' => 'House of the Dragon',
            'synopsis' => 'L\'histoire de la maison Targaryen, 200 ans avant les événements de Game of Thrones. Les partisans d\'Aegon s\'opposent à ceux de sa demi-soeur Rhaenyra, pour conquérir le trône de Viserys I, leur défunt père.',
            'category' => 'category_Aventure',
        ],
        [
            'title' => 'Le Seigneur des anneaux',
            'synopsis' => 'En passant par les profondeurs des Monts Brumeux et le royaume de Númenor, les héros affrontent la réapparition tant redoutée du mal en Terre du Milieu et créent des héritages qui vivront longtemps après qu\'ils soient partis.',
            'category' => 'category_Fantastique',
        ],
        [
            'title' => 'Les 100',
            'synopsis' => 'Après une apocalypse nucléaire, les 318 survivants se réfugient dans des stations spatiales et parviennent à y vivre et à se reproduire, atteignant le nombre de 4000 ; 97 ans plus tard, une centaine de jeunes délinquants redescendent sur Terre.',
            'category' => 'category_Fantastique',
        ],
        [
            'title' => 'Teen Wolf',
            'synopsis' => 'Transformé en loup-garou après avoir été mordu par un animal, un lycéen devient un sportif adulé et un bourreau des c?urs qui doit faire face à de nouveaux problèmes.',
            'category' => 'category_Fantastique',
        ],
        [
            'title' => 'Pretty Little Liars',
            'synopsis' => 'Quatre lycéennes, autrefois soudées, sont à la dérive depuis que leur meneuse a disparu. Il faudra les menaces d\'un maître chanteur pour qu\'elles se retrouvent.',
            'category' => 'category_Horreur',
        ],
        [
            'title' => 'Hannibal',
            'synopsis' => 'Jack Crawford recrute un profiler qui possède un don lui permettant d\'aider à la capture de tueurs.',
            'category' => 'category_Horreur',
        ],
        [
            'title' => 'American Horror Story',
            'synopsis' => 'American Horror Story, ou Histoire d\'horreur au Québec, est une anthologie télévisée américaine créée et produite par Ryan Murphy et Brad Falchuk, diffusée depuis le 5 octobre 2011 sur la chaîne FX et disponible le lendemain sur le service de streaming Hulu et au Canada depuis le 31 octobre 2011 sur FX Canada.',
            'category' => 'category_Horreur',
        ],
        [
            'title' => 'All of Us Are Dead',
            'synopsis' => 'Un lycée situé dans la petite ville de Hyosan devient l\'épicentre d\'une épidémie liée à un virus zombie. Pris au piège, les élèves doivent lutter pour s\'échapper et éviter d\'être contaminés à leur tour.',
            'category' => 'category_Horreur',
        ],
        [
            'title' => 'Kingdom',
            'synopsis' => 'Lorsqu\'une mystérieuse peste commence à se propager dans un royaume, d\'étranges rumeurs sur la mort imminente du souverain commencent à prendre racine. Le prince héritier doit faire face à de nouveaux ennemis pour sauver son peuple.',
            'category' => 'category_Horreur',
        ],
     ];
    public function load(ObjectManager $manager)
    {
        foreach (self::PROGRAMS as $programDescription) {
            $program = new Program();
            $program->setTitle($programDescription['title']);
            $program->setSynopsis($programDescription['synopsis']);

            $category = $this->getReference($programDescription['category']);
            $program->setCategory($category);
            $manager->persist($program);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
          CategoryFixtures::class,
        ];
    }


}