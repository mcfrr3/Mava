<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 10/2/17
 * Time: 2:59 PM
 */

namespace AppBundle\DataFixtures\ORM;


use AppBundle\Entity\Workcpace;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadWorkspaces extends AbstractFixture implements
    OrderedFixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $workspace1 = new Workcpace();
        $workspace1->setName('Writing');
        $workspace1->setDescription('info for writing Workspace');
        $manager->persist($workspace1);
        $manager->flush();
        $this->addReference('workspace-writing', $workspace1);
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        // the order in which fixtures will be loaded
        return 10;
    }
}