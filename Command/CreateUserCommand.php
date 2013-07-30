<?php

namespace Betacie\Bundle\MangoPayBundle\Command;

use Betacie\Bundle\MangoPayBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class CreateUserCommand extends ContainerAwareCommand
{

    public function configure()
    {
        $this
            ->setName('mangopay:user:create')
            ->setDescription('Create a new User account in MangoPay')
            ->addArgument('first-name', InputArgument::REQUIRED, 'First Name of user')
            ->addArgument('last-name', InputArgument::REQUIRED, 'Last Name of user')
            ->addArgument('email', InputArgument::REQUIRED, 'Email of user')
            ->addArgument('nationality', InputArgument::REQUIRED, 'Nationality of user: ISO 3166-1 alpha-2')
            ->addArgument('birthday', InputArgument::REQUIRED, 'Birthday of User (format: "Y/m/d")')
            ->addArgument('ip', InputArgument::REQUIRED, 'IP of user')
            ->addArgument('person-type', InputArgument::REQUIRED, 'Person Type of user (Must be "NATURAL_PERSON or LEGAL_PERSONALITY")')
            ->addOption('tag', 't', InputOption::VALUE_OPTIONAL, 'Tag')
        ;
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {

        $this->isPersonTypeValid($input->getArgument('person-type'));

        $birthday = new \DateTime($input->getArgument('birthday'));

        $message = $this->getContainer()->get('betacie_mango_pay.message.user');

        $response = $message->create(array(
            'FirstName' => $input->getArgument('first-name'),
            'LastName' => $input->getArgument('last-name'),
            'Email' => $input->getArgument('email'),
            'Nationality' => $input->getArgument('nationality'),
            'Birthday' => $birthday->getTimestamp(),
            'IP' => $input->getArgument('ip'),
            'PersonType' => $input->getArgument('person-type'),
            'Tag' => $input->getOption('tag'),
        ));

        $data = $response->json();

        $output->writeln(sprintf('<info>User created, ID: </info><comment>%s</comment>', $data['ID']));
    }

    public function interact(InputInterface $input, OutputInterface $output)
    {
        if (!$input->getArgument('first-name')) {
            $firstName = $this->getHelper('dialog')->askAndValidate(
                $output, 'Please choose a First Name:', function($firstName) {
                    if (empty($firstName)) {
                        throw new \Exception('First Name can not be empty');
                    }

                    return $firstName;
                }
            );
            $input->setArgument('first-name', $firstName);
        }

        if (!$input->getArgument('last-name')) {
            $lastName = $this->getHelper('dialog')->askAndValidate(
                $output, 'Please choose a Last Name:', function($lastName) {
                    if (empty($lastName)) {
                        throw new \Exception('Last Name can not be empty');
                    }

                    return $lastName;
                }
            );
            $input->setArgument('last-name', $lastName);
        }

        if (!$input->getArgument('email')) {
            $email = $this->getHelper('dialog')->askAndValidate(
                $output, 'Please choose an Email:', function($email) {
                    if (empty($email)) {
                        throw new \Exception('Email can not be empty');
                    }

                    return $email;
                }
            );
            $input->setArgument('email', $email);
        }

        if (!$input->getArgument('nationality')) {
            $nationality = $this->getHelper('dialog')->askAndValidate(
                $output, 'Please choose a Nationality:', function($nationality) {
                    if (empty($nationality)) {
                        throw new \Exception('Nationality can not be empty');
                    }

                    return $nationality;
                }
            );
            $input->setArgument('nationality', $nationality);
        }

        if (!$input->getArgument('birthday')) {
            $birthday = $this->getHelper('dialog')->askAndValidate(
                $output, 'Please choose a Birthday (Y/m/d):', function($birthday) {
                    if (empty($birthday)) {
                        throw new \Exception('Birthday can not be empty');
                    }

                    return $birthday;
                }
            );
            $input->setArgument('birthday', $birthday);
        }

        if (!$input->getArgument('ip')) {
            $ip = $this->getHelper('dialog')->askAndValidate(
                $output, 'Please choose an IP:', function($ip) {
                    if (empty($ip)) {
                        throw new \Exception('IP can not be empty');
                    }

                    return $ip;
                }
            );
            $input->setArgument('ip', $ip);
        }

        if (!$input->getArgument('person-type')) {
            $personType = $this->getHelper('dialog')->askAndValidate(
                $output, 'Please choose a Person Type:', function($personType) {
                    if (empty($personType)) {
                        throw new \Exception('Person Type can not be empty');
                    }

                    $this->isPersonTypeValid($personType);

                    return $personType;
                }
            );
            $input->setArgument('person-type', $personType);
        }
    }

    private function isPersonTypeValid($value)
    {
        if (!in_array($value, User::getAvailablePersonTypes())) {
            throw new \Exception('Person Type must be "NATURAL_PERSON" or "LEGAL_PERSONALITY"');
        }
    }

}
