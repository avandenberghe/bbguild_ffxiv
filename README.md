# bbGuild - Final Fantasy XIV
[![Tests](https://github.com/avatharbe/bbguildffxiv/actions/workflows/tests.yml/badge.svg)](https://github.com/avatharbe/bbguildffxiv/actions/workflows/tests.yml)

Game plugin that adds Final Fantasy XIV support to [bbGuild](https://github.com/avandenberghe/bbguild).

## Features

- **FFXIV Classes & Jobs** - 16 base classes and jobs (Archer, Bard, Gladiator, Paladin, Lancer, Dragoon, Marauder, Warrior, Pugilist, Monk, Conjurer, White Mage, Thaumaturge, Black Mage, Arcanist, Summoner, Scholar)
- **FFXIV Races** - 5 playable races (Hyur, Elezen, Lalafell, Miqo'te, Roegadyn)
- **Grand Companies** - The Maelstrom, The Order of the Twin Adder, The Immortal Flames
- **Localization** - Class and race names in English, French, and German
- **Lodestone Links** - Boss and zone database URLs linked to the official FFXIV Lodestone

## Requirements

- phpBB >= 3.3.0
- PHP >= 7.4.0
- **bbGuild core** (`avathar/bbguild`) must be installed and enabled

## Installation

1. Ensure bbGuild core (`avathar/bbguild`) is installed and enabled.
2. Copy the `bbguildffxiv` folder to `/ext/avathar/bbguildffxiv/`.
3. Navigate in the ACP to `Customise -> Manage extensions`.
4. Look for `bbGuild - Final Fantasy XIV` under Disabled Extensions and click `Enable`.
5. Go to ACP > bbGuild > Games and install the **Final Fantasy XIV** game.

## Uninstall

1. Navigate in the ACP to `Customise -> Extension Management -> Extensions`.
2. Find `bbGuild - Final Fantasy XIV` under Enabled Extensions and click `Disable`.
3. To permanently uninstall, click `Delete Data` and then delete the `/ext/avathar/bbguildffxiv` folder.

**Note:** Disabling the extension does not delete existing guild or player data. Your roster and player records remain intact in bbGuild core.

## Game Data

### Classes & Jobs

| ID | Class/Job | Armor | Base Class |
|----|-----------|-------|------------|
| 1 | Archer | Leather | - |
| 2 | Bard | Leather | Archer |
| 3 | Gladiator | Plate | - |
| 4 | Paladin | Plate | Gladiator |
| 5 | Lancer | Plate | - |
| 6 | Dragoon | Plate | Lancer |
| 7 | Marauder | Plate | - |
| 8 | Warrior | Plate | Marauder |
| 9 | Pugilist | Leather | - |
| 10 | Conjurer | Leather | - |
| 11 | White Mage | Cloth | Conjurer |
| 12 | Thaumaturge | Cloth | - |
| 13 | Black Mage | Cloth | Thaumaturge |
| 14 | Arcanist | Cloth | - |
| 15 | Summoner | Cloth | Arcanist |
| 16 | Scholar | Cloth | Arcanist |

### Races

| ID | Race | Faction |
|----|------|---------|
| 2 | Roegadyn | Maelstrom |
| 3 | Hyur | Neutral |
| 4 | Elezen | Twin Adder |
| 5 | Lalafell | Twin Adder |
| 6 | Miqo'te | Neutral |

### Known Limitations

This data set covers **A Realm Reborn** (base game). The following content from later expansions is not yet included:

- **Heavensward** - Au Ra race, Dark Knight, Astrologian, Machinist
- **Stormblood** - Red Mage, Samurai
- **Shadowbringers** - Viera and Hrothgar races, Gunbreaker, Dancer
- **Endwalker** - Sage, Reaper
- **Dawntrail** - Viper, Pictomancer, Female Hrothgar

These will be added in future updates.

## License

[GNU General Public License v2](http://opensource.org/licenses/gpl-2.0.php)

## Links

- [bbGuild Core](https://github.com/avandenberghe/bbguild)
- [FFXIV Lodestone](https://na.finalfantasyxiv.com/lodestone/)
- [Issue Tracker](https://github.com/avandenberghe/bbguild/issues)
