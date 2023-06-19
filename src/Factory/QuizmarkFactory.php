<?php

namespace App\Factory;

use App\Entity\Quizmark;
use App\Repository\QuizmarkRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Quizmark>
 *
 * @method        Quizmark|Proxy                     create(array|callable $attributes = [])
 * @method static Quizmark|Proxy                     createOne(array $attributes = [])
 * @method static Quizmark|Proxy                     find(object|array|mixed $criteria)
 * @method static Quizmark|Proxy                     findOrCreate(array $attributes)
 * @method static Quizmark|Proxy                     first(string $sortedField = 'id')
 * @method static Quizmark|Proxy                     last(string $sortedField = 'id')
 * @method static Quizmark|Proxy                     random(array $attributes = [])
 * @method static Quizmark|Proxy                     randomOrCreate(array $attributes = [])
 * @method static QuizmarkRepository|RepositoryProxy repository()
 * @method static Quizmark[]|Proxy[]                 all()
 * @method static Quizmark[]|Proxy[]                 createMany(int $number, array|callable $attributes = [])
 * @method static Quizmark[]|Proxy[]                 createSequence(iterable|callable $sequence)
 * @method static Quizmark[]|Proxy[]                 findBy(array $attributes)
 * @method static Quizmark[]|Proxy[]                 randomRange(int $min, int $max, array $attributes = [])
 * @method static Quizmark[]|Proxy[]                 randomSet(int $number, array $attributes = [])
 */
final class QuizmarkFactory extends ModelFactory
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
            'mark' => 20,
            'quiz' => QuizFactory::randomOrCreate(),
            'student' => StudentFactory::randomOrCreate(),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Quizmark $quizmark): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Quizmark::class;
    }
}
