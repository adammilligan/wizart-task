export default class Model
{
	fields: Map<string, mixed> = null;
	originalFields: Map<string, mixed> = null;

	constructor(fields: Object<string, mixed>)
	{
		this.initFields(fields);
	}

	initFields(fields: Object<string, mixed>): void
	{
		this.fields = new Map(Object.entries(fields));
		this.originalFields = new Map(Object.entries(fields));
	}

	hasField(name: string): boolean
	{
		return this.fields.has(name);
	}

	getFields(): Object
	{
		const fields = {};

		for (let [k, v] of this.fields)
		{
			fields[k] = v;
		}

		return fields;
	}

	getField(name: string, defaultValue: ?mixed = null): mixed
	{
		return this.fields.has(name) ? this.fields.get(name) : defaultValue;
	}

	getOriginalField(name: string): ?mixed
	{
		return this.originalFields.has(name) ? this.originalFields.get(name) : null;
	}

	setField(name: string, value: mixed): boolean
	{
		this.fields.set(name, value);

		return this.getOriginalField(name) === value;
	}
}