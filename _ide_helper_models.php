<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Agents
 *
 * @property int $id
 * @property string $uniqueId
 * @property string $ref
 * @property string $name
 * @property string $phone
 * @property string $region
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Agents newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Agents newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Agents query()
 * @method static \Illuminate\Database\Eloquent\Builder|Agents whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agents whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agents whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agents wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agents whereRef($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agents whereRegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agents whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agents whereUniqueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Agents whereUpdatedAt($value)
 */
	class Agents extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Sales
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Sales newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sales newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Sales query()
 */
	class Sales extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string $phone
 * @property string|null $face_image
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFaceImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

