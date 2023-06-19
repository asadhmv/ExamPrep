<?php

namespace App\Factory;

use App\Entity\Ressources;
use App\Repository\RessourcesRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Ressources>
 *
 * @method        Ressources|Proxy                     create(array|callable $attributes = [])
 * @method static Ressources|Proxy                     createOne(array $attributes = [])
 * @method static Ressources|Proxy                     find(object|array|mixed $criteria)
 * @method static Ressources|Proxy                     findOrCreate(array $attributes)
 * @method static Ressources|Proxy                     first(string $sortedField = 'id')
 * @method static Ressources|Proxy                     last(string $sortedField = 'id')
 * @method static Ressources|Proxy                     random(array $attributes = [])
 * @method static Ressources|Proxy                     randomOrCreate(array $attributes = [])
 * @method static RessourcesRepository|RepositoryProxy repository()
 * @method static Ressources[]|Proxy[]                 all()
 * @method static Ressources[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static Ressources[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static Ressources[]|Proxy[]                 findBy(array $attributes)
 * @method static Ressources[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static Ressources[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 */
final class RessourcesFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'student' => StudentFactory::randomOrCreate(),
            'subject' => SubjectFactory::randomOrCreate(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Ressources $ressources): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Ressources::class;
    }
}
