import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    async close() {
        console.log('test debug');
        this.element.style.width = "0px";
        await this.#waitForAnimation();
        this.element.remove();
    }

    #waitForAnimation() {
        return Promise.all(
            this.element.getAnimations().map(animation => animation.finished),
        )
    }
}
