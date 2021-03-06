<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Form;

interface FormTypeInterface
{
    function buildForm(FormBuilder $builder, array $options);

    function buildView(FormView $view, FormInterface $form);

    function buildViewBottomUp(FormView $view, FormInterface $form);

    function createBuilder($name, FormFactoryInterface $factory, array $options);

    function getDefaultOptions(array $options);

    function getParent(array $options);

    function getName();

    function setExtensions(array $extensions);

    function getExtensions();
}