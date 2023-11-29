<?php declare(strict_types=1);

namespace Ukrposhta\Tests\Utils;

use Faker\Generator;

/**
 *
 */
class FakerGenerator extends Generator implements FakerGeneratorInterface {

  /**
   * {@inheritDoc}
   */
  public function barcode(): string
  {
    return $this->numerify('barcode-#############');
  }

  /**
   * {@inheritDoc}
   */
  public function randomDigitOrNull(): ?int
  {
    return mt_rand(0, 1) === 1 ? $this->randomDigit() : NULL;
  }

  /**
   * {@inheritDoc}
   */
  public function randomStringOrNull(): ?string
  {
    return mt_rand(0, 1) === 1 ? $this->lexify() : NULL;
  }

  /**
   * {@inheritDoc}
   */
  public function sentenceOrNull(int $length = 3): ?string
  {
    return mt_rand(0, 1) === 1 ? $this->sentence($length) : NULL;
  }

  /**
   * {@inheritDoc}
   */
  public function uuid(): string
  {
    return parent::uuid();
  }

  /**
   * {@inheritDoc}
   */
  public function boolean(): bool
  {
    return parent::boolean();
  }

  /**
   * {@inheritDoc}
   */
  public function word(): string
  {
    return parent::word();
  }

  /**
   * {@inheritDoc}
   */
  public function words($nb = 3, $asText = false): array|string
  {
    return parent::words($nb, $asText);
  }

  /**
   * {@inheritDoc}
   */
  public function url(): string
  {
    return parent::url();
  }

  /**
   * {@inheritDoc}
   */
  public function randomElements(array $array = ['a', 'b', 'c'], int $count = 1, bool $allowDuplicates = false): array
  {
    return parent::randomElements($array, $count, $allowDuplicates);
  }

  /**
   * {@inheritDoc}
   */
  public function address(): string
  {
    return parent::address(); // TODO: Change the autogenerated stub
  }

  /**
   * {@inheritDoc}
   */
  public function languageCode(): string
  {
    return parent::languageCode(); // TODO: Change the autogenerated stub
  }

}
