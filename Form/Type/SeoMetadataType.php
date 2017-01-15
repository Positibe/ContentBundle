<?php
/**
 * This file is part of the PositibeLabs Projects.
 *
 * (c) Pedro Carlos Abreu <pcabreus@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Positibe\Bundle\ContentBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class SeoMetadataType
 * @package Positibe\Bundle\ContentBundle\Form\Type
 *
 * @author Pedro Carlos Abreu <pcabreus@gmail.com>
 */
class SeoMetadataType extends AbstractType
{
    /**
     * {@inheritDoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->remove(
            'extraProperties'
          )
          ->remove(
            'extraNames'
          )
          ->remove(
            'extraHttp'
          );
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $defaults['by_reference'] = true;

        $resolver->setDefaults($defaults);
    }

    public function getParent()
    {
        return 'seo_metadata';
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'positibe_seo_metadata';
    }

} 