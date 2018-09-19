<?php
/**
 * @copyright Copyright (c) 2018 Robin Appelman <robin@icewind.nl>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

namespace OCA\Files_Trashbin\Trash;

use OCP\Files\FileInfo;
use OCP\IUser;

class TrashItem implements ITrashItem {
	/** @var ITrashBackend */
	private $backend;
	/** @var string */
	private $orignalLocation;
	/** @var int */
	private $deletedTime;
	/** @var string */
	private $trashPath;
	/** @var FileInfo */
	private $fileInfo;

	/**
	 * TrashItem constructor.
	 *
	 * @param ITrashBackend $backend
	 * @param string $originalLocation
	 * @param int $deletedTime
	 * @param string $trashPath
	 * @param FileInfo $fileInfo
	 */
	public function __construct(ITrashBackend $backend, string $originalLocation, int $deletedTime, string $trashPath, FileInfo $fileInfo) {
		$this->backend = $backend;
		$this->orignalLocation = $originalLocation;
		$this->deletedTime = $deletedTime;
		$this->trashPath = $trashPath;
		$this->fileInfo = $fileInfo;
	}

	public function getTrashBackend(): ITrashBackend {
		return $this->backend;
	}

	public function getOriginalLocation(IUser $user): string {
		return $this->orignalLocation;
	}

	public function getDeletedTime(): int {
		return $this->deletedTime;
	}

	public function getTrashPath(): string {
		return $this->trashPath;
	}

	public function isRootItem(): bool {
		return substr_count($this->getTrashPath(), '/') === 1;
	}

	public function getEtag() {
		return $this->fileInfo->getEtag();
	}

	public function getSize() {
		return $this->fileInfo->getSize();
	}

	public function getMtime() {
		return $this->fileInfo->getMtime();
	}

	public function getName() {
		return $this->fileInfo->getName();
	}

	public function getInternalPath() {
		return $this->fileInfo->getInternalPath();
	}

	
	public function getPath() {
		return $this->fileInfo->getPath();
	}

	
	public function getMimetype() {
		return $this->fileInfo->getMimetype();
	}

	
	public function getMimePart() {
		return $this->fileInfo->getMimePart();
	}

	
	public function getStorage() {
		return $this->fileInfo->getStorage();
	}

	
	public function getId() {
		return $this->fileInfo->getId();
	}

	
	public function isEncrypted() {
		return $this->fileInfo->isEncrypted();
	}

	
	public function getPermissions() {
		return $this->fileInfo->getPermissions();
	}

	
	public function getType() {
		return $this->fileInfo->getType();
	}

	
	public function isReadable() {
		return $this->fileInfo->isReadable();
	}

	
	public function isUpdateable() {
		return $this->fileInfo->isUpdateable();
	}

	
	public function isCreatable() {
		return $this->fileInfo->isCreatable();
	}

	
	public function isDeletable() {
		return $this->fileInfo->isDeletable();
	}

	
	public function isShareable() {
		return $this->fileInfo->isShareable();
	}

	
	public function isShared() {
		return $this->fileInfo->isShared();
	}

	
	public function isMounted() {
		return $this->fileInfo->isMounted();
	}

	
	public function getMountPoint() {
		return $this->fileInfo->getMountPoint();
	}

	
	public function getOwner() {
		return $this->fileInfo->getOwner();
	}

	
	public function getChecksum() {
		return $this->fileInfo->getChecksum();
	}


}