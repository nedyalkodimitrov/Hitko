import ScrollTrigger from './lib/ScrollTrigger.min'
const trigger = new ScrollTrigger({
    trigger: {
        once: true
    }
})
// Add all html elements with attribute data-trigger, these elements will only be triggered once
trigger.add('[data-trigger]')
// Add all html elements with attribute data-triggerAlways, these elements will always be triggered
trigger.add('[data-triggerAlways]', { once: false })
