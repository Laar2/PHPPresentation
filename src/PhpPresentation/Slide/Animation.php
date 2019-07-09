<?php
namespace PhpOffice\PhpPresentation\Slide;

use PhpOffice\PhpPresentation\AbstractShape;

class Animation
{
    /**
     * @var array
     */
    protected $shapeCollection = array();

    /**
     * Duration of animation
     * @var integer
     */
    private $duration = 30;
   
//     blinds(horizontal)
//     blinds(vertical)
//     box(in)
//     box(out)
//     checkerboard(across)
//     checkerboard(down)
//     circle(in)
//     circle(out)
//     diamond(in)
//     diamond(out)
//     dissolve
//     fade
//     slide(fromTop)
//     slide(fromBottom)
//     slide(fromLeft)
//     slide(fromRight)
//     plus(in)
//     plus(out)
//     barn(inVertical)
//     barn(inHorizontal)
//     barn(outVertical)
//     barn(outHorizontal)
//     randombar(horizontal)
//     randombar(vertical)
//     strips(downLeft)
//     strips(upLeft)
//     strips(downRight)
//     strips(upRight)
//     wedge
//     wheel(1)
//     wheel(2)
//     wheel(3)
//     wheel(4)
//     wheel(8)
//     wipe(right)
//     wipe(left)
//     wipe(up)
//     wipe(down)
    private $animEffectFilter= 'wipe(down)';
    
//   in
//   out
    private $animEffectTransition= 'out';
    
    
    /**
     * @param AbstractShape $shape
     * @return Animation
     */
    public function addShape(AbstractShape $shape)
    {
        $this->shapeCollection[] = $shape;
        return $this;
    }

    /**
     * @return array
     */
    public function getShapeCollection()
    {
        return $this->shapeCollection;
    }

    /**
     * @param array $array
     * @return Animation
     */
    public function setShapeCollection(array $array = array())
    {
        $this->shapeCollection = $array;
        return $this;
    }
    
    
	public function getDuration() {
		return $this->duration;
	}
	
	
	public function setDuration($duration) {
		$this->duration = $duration;
		return $this;
	}
	
	public function getAnimEffectFilter() {
		return $this->animEffectFilter;
	}
	
	public function setAnimEffectFilter($animEffectFilter) {
		$this->animEffectFilter = $animEffectFilter;
		return $this;
	}
	
	public function getAnimEffectTransition() {
		return $this->animEffectTransition;
	}
	
	public function setAnimEffectTransition($animEffectTransition) {
		$this->animEffectTransition = $animEffectTransition;
		return $this;
	}

}
