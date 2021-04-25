# ObserverExample Module

Using events and observers, you can run your custom code in response to a specific Magento event or even a custom event.

Events are dispatched by modules when certain actions are triggered. In addition to its own events, Magento allows you to create your own events that can be dispatched in your code. When an event is dispatched, it can pass data to any observers configured to watch that event.

Events can be dispatched using the Magento\Framework\Event\ManagerInterface class. This class can be obtained through dependency injection by defining the dependency in your constructor.

To dispatch an event, call the dispatch function of the event manager class and provide it with the name of the event you want to dispatch along with an array of data you wish to provide to observers.

Magento 2 uses Area Definition to manage the store files. It provides three different areas to create configuration files for the events:

Note: There are different places to create files for different handlers.

To create observer for frontend you can create file under : app/code/VendorName/ModuleName/etc/frontend/events.xml

To create observer for frontend you can create file under : app/code/VendorName/ModuleName/etc/adminhtml/events.xml

To create observer for both end, you need to create file under : app/code/VendorName/ModuleName/etc/events.xml

The observer name must be unique, or an override will occur.

# Observer xml element has the following properties:

name (required) - The name of the observer for the event definition.

instance (required) - The fully qualified class name of the observer.

disabled - Determines whether this observer is active or not. Default value is false.

shared - Determines the lifestyle of the class. Default is true.

# Object lifestyle configuration

The lifestyle of an object determines the number of instances that can exist of that object.

You can configure dependencies in Magento to have the following lifestyles:

Singleton(default) - One instance of this class exists. The object manager creates it at the first request. Requesting the class again returns the same instance. Disposing or ending the container registered to it releases the instance.

Transient - The object manager creates a new instance of the class for every request.

# Overloading an Observer under magento

https://www.pierrefay.com/magento2-training/events-observers.html

# Example

https://devdocs.magento.com/guides/v2.4/extension-dev-guide/events-and-observers.html#dispatching-events

# Reference

https://devdocs.magento.com/guides/v2.4/extension-dev-guide/build/di-xml-file.html#overview

https://www.mageplaza.com/magento-2-module-development/magento-2-create-events.html

https://www.mageplaza.com/magento-2-module-development/magento-2-events.html

https://magenticians.com/magento-2-events-observers/

https://webkul.com/blog/observers-in-magento2/

https://www.cloudways.com/blog/magento-2-events-observers/

https://www.pierrefay.com/magento2-training/events-observers.html
